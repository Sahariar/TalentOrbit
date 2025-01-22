<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CandidateProfileController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.index')->with('layout', 'app');
})->name('home');

Route::middleware('guest')->group(function () {
    // Route::get('/register', [RegisteredUserController::class, 'showRegisterationForm'])->name('register');
    Route::get('/register/CompanyProfile', [RegisteredUserController::class, 'showCompanyProfileRegistrationForm'])->name('register.CompanyProfile');
    Route::get('/register/candidate', [RegisteredUserController::class, 'showCandidateRegistrationForm'])->name('register.candidate');

    Route::post('/register/CompanyProfile', [RegisteredUserController::class, 'registerCompanyProfile'])->name('register.CompanyProfile.submit');
    Route::post('/register/candidate', [RegisteredUserController::class, 'registerCandidate'])->name('register.candidate.submit');
});

// Route::get('/dashboard', function () {
//     return view('dashboard.index')->with('layout', 'dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Management
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Companies management
    Route::prefix('companies')->name('companies.')->group(function () {
        Route::get('/', [AdminController::class, 'companies'])->name('index');
        Route::get('/{companyProfile}', [AdminController::class, 'companyProfileShow'])->name('show');
        Route::patch('/{companyProfile}/approve', [AdminController::class, 'CompanyProfileApprove'])->name('approve');
        Route::patch('/{companyProfile}/reject', [AdminController::class, 'companyProfileReject'])->name('reject');
        Route::delete('/{companyProfileProfile}', [AdminController::class, 'CompanyProfileDelete'])->name('delete');
    });

    // Jobs management
    Route::prefix('job_posts')->name('jobs.')->group(function () {
        Route::get('/', [AdminController::class, 'jobs'])->name('index');
        Route::get('/{job}', [AdminController::class, 'jobShow'])->name('show');
        Route::patch('/{job}/toggle-status', [AdminController::class, 'jobToggleStatus'])->name('toggle-status');
        Route::delete('/{job}', [AdminController::class, 'jobDelete'])->name('delete');
    });

    // Candidates management
    Route::prefix('candidates')->name('candidates.')->group(function () {
        Route::get('/', [AdminController::class, 'candidates'])->name('index');
        Route::get('/{candidate}', [AdminController::class, 'candidateShow'])->name('show');
        Route::delete('/{candidate}', [AdminController::class, 'candidateDelete'])->name('delete');
    });
});

Route::middleware(['auth'])->group(function () {

    // CompanyProfile routes
    Route::middleware(['role:CompanyProfile'])->group(function () {
        Route::get('/CompanyProfile/dashboard', [CompanyProfileController::class, 'dashboard'])->name('CompanyProfile.dashboard');
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
    'show' => 'jobs.show',
]);

require __DIR__.'/auth.php';
