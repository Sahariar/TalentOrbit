<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\CandidateProfile;
use App\Models\CompanyProfile;
use App\Models\User;
use App\Notifications\NewCompanyRegistration;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $roles = Config::get('roles');
        return view('auth.register', compact('roles'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role'=> ['required' , 'string' , Rule::in(array_keys(config('roles')))],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role'=> $request->role,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }

    public function showCompanyRegistrationForm(){
        return view('auth.register-company');
    }
    public function showCandidateRegistrationForm(){
        return view('auth.register-candidate');
    }
    public function registerCompany(Request $request){

        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'company_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'url' => 'nullable|string|max:255',
            'linkedin_url' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        DB::transaction(function () use ($request) {
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('company', 'public');
            }
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'company',
                'image' => $imagePath,
            ]);

            $company = CompanyProfile::create([
                'name' => $request->company_name,
                'phone_number' => $request->phone_number,
                'url' => $request->url,
                'linkedin_url' => $request->linkedin_url,
                'image' => $imagePath,
                'user_id' => $user->id,
                'is_approved' => false,
            ]);

            // Notify admin about new company registration
            // User::where('role', 'admin')
            //     ->get()
            //     ->each(function ($admin) use ($company) {
            //         $admin->notify(new NewCompanyRegistration($company));
            //     });

            event(new Registered($user));

            Auth::login($user);
        });

        return redirect()->route('company.dashboard')
            ->with('success', 'Registration successful. Please wait for admin approval to post jobs.');
    }
    public function registerCandidate(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'required|string|max:20',
            'url' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        DB::transaction(function () use ($request) {
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('candidate', 'public');
            }
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'candidate', // Directly set role string
                'image' => $imagePath,
            ]);

            $CandidateProfile = CandidateProfile::create([
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'url' => $request->url,
                'image' => $imagePath,
                'user_id' => $user->id,
                'is_subscribed' => false,
            ]);
            event(new Registered($user));

            Auth::login($user);
        });

        return redirect()->route('candidate.dashboard')
            ->with('success', 'Registration successful. You can now browse jobs.');
    }

}
