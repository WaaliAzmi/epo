<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\CarbonCreditController;
use App\Http\Controllers\Public\ProductController as PublicProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CarbonActivityController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\CarbonCalculationController;
use App\Http\Controllers\Admin\BuyRequestController;
use App\Http\Controllers\Admin\CreditSaleRequestController;

// Route::post('/buy-request/submit', [BuyRequestController::class, 'submitForm'])->name('credits.buy.submit');
// Route::get('/buy-request', [BuyRequestController::class, 'showForm'])->name('credits.buy.form');


/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PublicProductController::class, 'index'])->name('welcome.view');

// Auth
Route::get('/signup', [SignupController::class, 'showForm'])->name('signup.form');
Route::post('/signup', [SignupController::class, 'register'])->name('signup.register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Password Reset
Route::get('/forgot-password', [PasswordResetController::class, 'showForgotForm'])->name('password.request');
Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [PasswordResetController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [PasswordResetController::class, 'resetPassword'])->name('password.update');

// Products & Cart
Route::get('/products', [PublicProductController::class, 'all'])->name('products');
Route::get('/cart', [CartController::class, 'view'])->name('cart.view');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.store');
Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart/decrement/{id}', [CartController::class, 'decrement'])->name('cart.decrement');
Route::get('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');

// Checkout
Route::get('/checkout', [CheckoutController::class, 'showCheckout'])->name('checkout');
Route::post('/confirm-order', [CheckoutController::class, 'confirmOrder'])->name('confirm.order');
Route::get('/order-success', fn() => view('order.success'))->name('order.success');

// Dev tool route
Route::get('/clear-cart', function () {
    session()->forget('cart');
    return redirect()->back()->with('success', 'Cart session cleared!');
});

/*
|--------------------------------------------------------------------------
| Carbon Routes
|--------------------------------------------------------------------------
*/

// Carbon Calculator (Ajax)
Route::post('/calculate-credits', [CarbonCalculationController::class, 'calculate'])->name('calculate.credits');
Route::post('/carbon/ajax-calculate', [CarbonActivityController::class, 'ajaxCalculate'])->name('carbon.ajaxCalculate');

// Carbon Activity Views & Store
Route::get('/carbon/create', [CarbonActivityController::class, 'create'])->name('carbon.create');
Route::post('/carbon/store', [CarbonActivityController::class, 'store'])->name('carbon.store');
Route::get('/carbon', [CarbonActivityController::class, 'index'])->name('carbon.index');

// Sell/Buy Credits
Route::get('/credits/sell', [CarbonActivityController::class, 'sellCredits'])->name('credits.sell');
Route::post('/credits/sell', [CarbonActivityController::class, 'submitSellRequest'])->name('credits.sell.submit'); // ✅ Use this one

Route::get('/credits/buy', [CarbonActivityController::class, 'buyCredits'])->name('credits.buy');
Route::post('/credits/buy', [CarbonActivityController::class, 'submitBuyCredits'])->name('credits.buy.submit');

/*
|--------------------------------------------------------------------------
| User Profile (Requires Auth)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('user.profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('user.profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('user.profile.update');
    Route::post('/profile/password', [ProfileController::class, 'updatePassword'])->name('user.profile.password');
    Route::delete('/profile/delete', [ProfileController::class, 'deleteAccount'])->name('user.profile.delete');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::resource('users', UserController::class);
    Route::resource('products', AdminProductController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('reviews', ReviewController::class);
    Route::resource('carbon-credits', CarbonCreditController::class);

    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');

    // Buy Credit Requests
     
     Route::get('/buy-requests', [BuyRequestController::class, 'index'])->name('buy.requests');
    Route::get('/sell-requests', [SellRequestController::class, 'index'])->name('sell.requests');
    
    Route::get('/buy-requests', [BuyRequestController::class, 'index'])->name('buy.requests');
    Route::delete('/buy-requests/{id}', [BuyRequestController::class, 'destroy'])->name('buy.requests.destroy');

    Route::get('/sell-requests', [CreditSaleRequestController::class, 'index'])->name('sell.requests');
    Route::delete('/sell-requests/{id}', [CreditSaleRequestController::class, 'destroy'])->name('sell.requests.destroy');
});


