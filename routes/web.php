<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CandidateProfileController;
use App\Http\Controllers\Company\JobPostController as CompanyJobPostController;
use App\Http\Controllers\Company\PaymentController as CompanyPaymentController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\CpaymentController;
use App\Http\Controllers\EtcController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\PricingPlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Public\CandidateController;
use App\Http\Controllers\Public\CompanyController;
use App\Http\Controllers\RSSFeedController;
use App\Models\Category;
use App\Models\JobPost;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $recentJobs = JobPost::with('company_profile')
        ->orderBy('created_at', 'desc')
        ->take(4)->get();

    $categories = Category::withCount('job_posts')->paginate(10);

    return view('public.index')
        ->with('layout', 'app')
        ->with('recentJobs', $recentJobs)
        ->with('categories', $categories);
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/register/CompanyProfile', [RegisteredUserController::class, 'showCompanyProfileRegistrationForm'])->name('register.companyProfile');
    Route::get('/register/candidate', [RegisteredUserController::class, 'showCandidateRegistrationForm'])->name('register.candidate');

    Route::post('/register/CompanyProfile', [RegisteredUserController::class, 'registerCompanyProfile'])->name('register.companyProfile.submit');
    Route::post('/register/candidate', [RegisteredUserController::class, 'registerCandidate'])->name('register.candidate.submit');
});

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
        Route::patch('/{companyProfile}/approve', [AdminController::class, 'companyProfileApprove'])->name('approve');
        Route::patch('/{companyProfile}/reject', [AdminController::class, 'companyProfileReject'])->name('reject');
        Route::delete('/{companyProfile}', [AdminController::class, 'companyProfileDelete'])->name('delete');
    });

    // Jobs management
    Route::prefix('job_posts')->name('job_posts.')->group(function () {
        Route::get('/', [AdminController::class, 'job_posts'])->name('index');
        Route::get('/{job}', [AdminController::class, 'job_postsShow'])->name('show');
        Route::patch('/{job}/toggle-status', [AdminController::class, 'jobToggleStatus'])->name('toggle-status');
        Route::delete('/{job}', [AdminController::class, 'jobDelete'])->name('delete');
    });

    // Candidates management
    Route::prefix('candidates')->name('candidates.')->group(function () {
        Route::get('/', [AdminController::class, 'candidates'])->name('index');
        Route::get('/{candidate}', [AdminController::class, 'candidateProfileShow'])->name('show');
        Route::delete('/{candidate}', [AdminController::class, 'candidateDelete'])->name('delete');
    });
    // Price Plans management
    Route::prefix('price-plans')->name('price-plans.')->group(function () {
        Route::get('/', [AdminController::class, 'pricePlans'])->name('index');
        Route::get('/{pricingplan}', [AdminController::class, 'pricePlansShow'])->name('show');
        Route::delete('/{price-plans}', [AdminController::class, 'pricePlansDelete'])->name('delete');
    });
    // Payment management
    Route::prefix('payments')->name('payments.')->group(function () {
        Route::get('/', [AdminController::class, 'payments'])->name('index');
        Route::get('/{payment}', [AdminController::class, 'paymentShow'])->name('show');
        Route::delete('/{payments}', [AdminController::class, 'paymentDelete'])->name('delete');
    });

    // category Management
    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('/', [AdminController::class, 'cateindex'])->name('cateindex');
        Route::get('/{category}', [AdminController::class, 'cateshow'])->name('cateshow');
        Route::delete('/{category}', [AdminController::class, 'cateDelete'])->name('catedelete');

    });
    // Tags Management
    Route::prefix('tags')->name('tags.')->group(function () {
        Route::get('/', [AdminController::class, 'tagindex'])->name('tagindex');
        Route::get('/{tag}', [AdminController::class, 'tagshow'])->name('tagshow');
        Route::delete('/{tag}', [AdminController::class, 'tagDelete'])->name('tagdelete');
    });
});

Route::middleware(['auth'])->group(function () {

    // Company routes
    Route::prefix('/company')->middleware(['role:company'])->group(function () {
        Route::get('/dashboard', [CompanyProfileController::class, 'dashboard'])->name('company.dashboard');
        Route::get('/job-posts/search', [CompanyJobPostController::class, 'search'])->name('company.job-posts.search');
        Route::get('/job-posts/{job_post}/toggle-activity', [CompanyJobPostController::class, 'toggle'])->name('company.job-posts.toggle-activity');
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
        Route::get('/payments/search', [CompanyPaymentController::class, 'search'])->name('company.payments.search');
        Route::resource('payments', CompanyPaymentController::class)->except(['create', 'store'])->names([
            'index' => 'company.payments.index',
            'show' => 'company.payments.show',
            'destroy' => 'company.payments.destroy',
            'edit' => 'company.payments.edit',
            'update' => 'company.payments.update',
        ]);
    });

    Route::prefix('/candidate')->middleware(['role:candidate'])->group(function () {
        Route::get('/dashboard', [CandidateProfileController::class, 'dashboard'])->name('candidate.dashboard');
        Route::get('/categories', [CandidateProfileController::class, 'categories'])->name('candidate.categories');
        Route::post('/subscribe', [CandidateProfileController::class, 'subscribe'])->name('candidate.subscribe');
    });

    Route::get('/priceplan/chose', [PricingPlanController::class, 'choseplan'])->name('priceplan.choseplan');
    Route::post('/payment/process', [CpaymentController::class, 'processPayment'])->name('payment.process');
    Route::get('/payment/confirm', [CpaymentController::class, 'confirmPayment'])->name('payment.confirm');
    Route::get('/payment-success', [CpaymentController::class, 'success'])->name('payment.success');
});

Route::get('/find-jobs', [JobPostController::class, 'find'])->name('find-jobs');

Route::get('category/{category}/jobs', [JobPostController::class, 'categoryJobs'])->name('category.jobs');

Route::get('/jobs/filter', [JobPostController::class, 'filter'])->name('jobs.filter');

Route::get('/jobs/{job}/apply', [JobPostController::class, 'apply'])->name('jobs.apply');

Route::resource('jobs', JobPostController::class)->names([
    'index' => 'jobs',
    'show' => 'jobs.show',
]);

Route::resource('company', CompanyController::class)->names([
    'index' => 'companies',
    'show' => 'company.show',
])->only(['index', 'show']);

Route::resource('candidate', CandidateController::class)->names([
    'index' => 'candidates',
    'show' => 'candidate.show',
]);

Route::view('about', 'public.etc.about_us')->name('about');
Route::view('category', 'public.etc.category')->name('category');
Route::view('contact', 'public.etc.contact')->name('contact');
Route::view('faqs', 'public.etc.faqs')->name('faqs');
Route::get('/price', [EtcController::class, 'price'])->name('pricing');
Route::view('privacy_policy', 'public.etc.privacy_policy')->name('privacy_policy');

Route::get('/rss-feed', [RSSFeedController::class, 'index'])->name('rss.feed');

require __DIR__.'/auth.php';
