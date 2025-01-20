<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\CandidateProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return view('public.index')->with('layout', 'app');;
})->name('home');


Route::middleware('guest')->group(function(){
    // Route::get('/register', [RegisteredUserController::class, 'showRegisterationForm'])->name('register');
    Route::get('/register/company', [RegisteredUserController::class, 'showCompanyRegistrationForm'])->name('register.company');
    Route::get('/register/candidate', [RegisteredUserController::class, 'showCandidateRegistrationForm'])->name('register.candidate');

    Route::post('/register/company', [RegisteredUserController::class, 'registerCompany'])->name('register.company.submit');
    Route::post('/register/candidate', [RegisteredUserController::class, 'registerCandidate'])->name('register.candidate.submit');
});

Route::get('/dashboard', function () {
    return view('dashboard.index')->with('layout', 'dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    // Admin routes
    Route::middleware(['role:admin'])->group(function () {
        // Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
        // Route::get('/admin/companies', [AdminController::class, 'companies']);
        // Route::patch('/admin/companies/{company}/approve', [AdminController::class, 'approveCompany']);
    });

    // Company routes
    Route::middleware(['role:company'])->group(function () {
        Route::get('/company/dashboard', [CompanyProfileController::class, 'dashboard'])->name('company.dashboard');
        // Route::resource('jobs', JobController::class);
    });
    Route::middleware(['role:candidate'])->group(function () {
        Route::get('/candidate/dashboard', [CandidateProfileController::class, 'dashboard'])->name('candidate.dashboard');
        // Route::resource('jobs', JobController::class);
    });
});

// public route
// Route::get('/jobs', [JobPostController::class, 'index'])->name('jobs');
Route::resource('jobs', JobPostController::class)->names([
    'index' => 'jobs',
    'show' => 'jobs.show'
]);

require __DIR__.'/auth.php';
