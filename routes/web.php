<?php

use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\CancelPage;
use App\Livewire\CartPage;
use App\Livewire\CategoryPage;
use App\Livewire\CheckoutPage;
use App\Livewire\HomePage;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\ProductDetailPage;
use App\Livewire\ProductPage;
use App\Livewire\SuccessPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');

Route::get('/categories', CategoryPage::class)->name('index.category-page');
Route::get('/carts', CartPage::class)->name('index.cart-page');

Route::get('/products', ProductPage::class)->name('index.product-page');
Route::get('/products/{slug}', ProductDetailPage::class)->name('products.show');

Route::get('/checkout', CheckoutPage::class)->name('checkout.show');
Route::get('/my-orders', MyOrdersPage::class)->name('my-orders.show');
Route::get('/my-orders/{order}', MyOrderDetailPage::class)->name('my-order-detail.show');

Route::get('/login', LoginPage::class);
Route::get('/register', RegisterPage::class);
Route::get('/forgot-password', ForgotPassword::class);
Route::get('/reset', ResetPasswordPage::class);

Route::get('/success', SuccessPage::class);
Route::get('/canceled', CancelPage::class);
