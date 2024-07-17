<?php

use App\Http\Controllers\LanguageController;
use App\Livewire\Auth\ForgotPasswordPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\BlogDetailPage;
use App\Livewire\BlogPage;
use App\Livewire\CancelPage;
use App\Livewire\CartPage;
use App\Livewire\CategoriesPage;
use App\Livewire\CheckoutPage;
use App\Livewire\CourseDetailPage;
use App\Livewire\CoursesPage;
use App\Livewire\HomePage;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\SuccessPage;
use Illuminate\Support\Facades\Route;

Route::get('/lang',[LanguageController::class , 'change'])->name('user.lang');

Route::get('/', HomePage::class);

Route::prefix('courses')->group(function () {
    Route::get('/categories', CategoriesPage::class);
    Route::get('/courses', CoursesPage::class);
    Route::get('/courses/{course}', CourseDetailPage::class);
});

Route::prefix('blogs')->group(function () {
    Route::get('/blog', BlogPage::class);
    Route::get('/blog/{blog}', BlogDetailPage::class);
});

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
