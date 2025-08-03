<?php

use App\Http\Controllers\LanguageController;
use App\Livewire\AboutPage;
use App\Livewire\Auth\ForgotPasswordPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\BlogDetailPage;
use App\Livewire\BlogPage;
use App\Livewire\CancelPage;
use App\Livewire\CartPage;
use App\Livewire\CategoriesPage;
use App\Livewire\CategoryDetailPage;
use App\Livewire\CheckoutPage;
use App\Livewire\CoachingPage;
use App\Livewire\ContactPage;
use App\Livewire\CourseDetailPage;
use App\Livewire\CoursesPage;
use App\Livewire\EducationPage;
use App\Livewire\HomePage;
use App\Livewire\ImagePage;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\ProjectDetailPage;
use App\Livewire\ProjectPage;
use App\Livewire\ServiceDetailPage;
use App\Livewire\SolutionPartnerPage;
use App\Livewire\SolutionPartnerDetailPage;
use App\Livewire\SuccessPage;
use App\Livewire\VideoPage;
use App\Livewire\WorkshopDetailPage;
use App\Livewire\WorkshopPage;
use Illuminate\Support\Facades\Route;

Route::get('/lang',[LanguageController::class , 'change'])->name('user.lang');

Route::get('/', HomePage::class);
Route::prefix('about')->group(function () {
    Route::get('/', AboutPage::class);
    Route::get('/solution-partner', SolutionPartnerPage::class);
    Route::get('/solution-partner-detail/{id}', SolutionPartnerDetailPage::class)->name('about.solution.partner');
    Route::get('/projects', ProjectPage::class);
    Route::get('/projects/{slug}', ProjectDetailPage::class);
});
Route::get('/currency/{currency}', [LanguageController::class, 'setCurrency'])->name('currency.set');
Route::prefix('courses')->group(function () {
    Route::get('/', CoursesPage::class);
    Route::get('/categories', CategoriesPage::class);
    Route::get('/{slug}', CourseDetailPage::class);
});

Route::prefix('categories')->group(function () {
    Route::get('/{slug}', CategoryDetailPage::class);
});

Route::prefix('services')->group(function () {
    Route::get('/coaching', CoachingPage::class);
    Route::get('/education', EducationPage::class);
    Route::get('/service-detail/{slug}', ServiceDetailPage::class);
});

Route::prefix('blog')->group(function () {
    Route::get('', BlogPage::class);
    Route::get('/{slug}', BlogDetailPage::class);
});

Route::prefix('gallery')->group(function () {
   Route::get('/images', ImagePage::class);
   Route::get('/videos', VideoPage::class);
});

Route::prefix('workshop')->group(function () {
    Route::get('/', WorkshopPage::class);
    Route::get('/{slug}', WorkshopDetailPage::class);
});

Route::get('contact', ContactPage::class);

Route::get('/cart', CartPage::class);
Route::get('/checkout', CheckoutPage::class);
Route::get('/my-orders', MyOrdersPage::class);
Route::get('/my-orders/{order}', MyOrderDetailPage::class);

Route::get('/login', LoginPage::class);
Route::get('/register', RegisterPage::class);
Route::get('/forgot', ForgotPasswordPage::class);
Route::get('/reset/{token}', ResetPasswordPage::class);

Route::get('/success', SuccessPage::class);
Route::get('/cancel', CancelPage::class);
