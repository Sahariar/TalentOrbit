<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CandidateProfileController;
use App\Http\Controllers\Company\JobPostController as CompanyJobPostController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.index')->with('layout', 'app');
})->name('home');

Route::middleware('guest')->group(function () {
    // Route::get('/register', [RegisteredUserController::class, 'showRegisterationForm'])->name('register');
    Route::get('/register/company', [RegisteredUserController::class, 'showCompanyRegistrationForm'])->name('register.company');
    Route::get('/register/candidate', [RegisteredUserController::class, 'showCandidateRegistrationForm'])->name('register.candidate');

    Route::post('/register/company', [RegisteredUserController::class, 'registerCompany'])->name('register.company.submit');
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
        Route::get('/{company}', [AdminController::class, 'companyShow'])->name('show');
        Route::patch('/{company}/approve', [AdminController::class, 'companyApprove'])->name('approve');
        Route::patch('/{company}/reject', [AdminController::class, 'companyReject'])->name('reject');
        Route::delete('/{company}', [AdminController::class, 'companyDelete'])->name('delete');
    });

    // Jobs management
    Route::prefix('jobs')->name('jobs.')->group(function () {
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

    // Company routes
    Route::prefix('/company')->middleware(['role:company'])->group(function () {
        Route::get('/dashboard', [CompanyProfileController::class, 'dashboard'])->name('company.dashboard');
        Route::get('/job-posts/search',[CompanyJobPostController::class,'search'])->name('company.job-posts.search');
        Route::resource('job-posts', CompanyJobPostController::class)->names([
            'index' => 'company.job-posts.index',
            'show' => 'company.job-posts.show',
            'create' => 'company.job-posts.create',
            'store' => 'company.job-posts.store',
            'edit' => 'company.job-posts.edit',
            'update' => 'company.job-posts.update',
            'destroy' => 'company.job-posts.destroy',
        ]);
        Route::resource('company-profile', CompanyProfileController::class);
        // Route::get('/profile/{profile}',[CompanyProfileController::class,'show'])->name('company.profile.show');
    });
    Route::middleware(['role:candidate'])->group(function () {
        Route::get('/candidate/dashboard', [CandidateProfileController::class, 'dashboard'])->name('candidate.dashboard');
        // Route::resource('jobs', JobController::class);
    });
});

Route::resource('jobs', JobPostController::class)->names([
    'index' => 'jobs',
    'show' => 'jobs.show',
]);

Route::resource('company', CompanyProfileController::class)->names([
    'index' => 'companies',
    'show' => 'company.show'
]);

Route::resource('candidate', CandidateProfileController::class)->names([
    'index' => 'candidates',
    'show' => 'candidate.show'
]);

require __DIR__.'/auth.php';
