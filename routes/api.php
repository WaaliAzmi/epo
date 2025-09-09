<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarbonActivityController;
use App\Http\Controllers\api\ApiAuthController; // ✅ Updated path (case-sensitive!)
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\PasswordResetController;

// Register route
Route::post('/register', [SignupController::class, 'register']);

// Login route
Route::post('/login', [LoginController::class, 'login']);

// Public product routes (no authentication required)
Route::get('/products', [ProductController::class, 'apiGetAllProducts']);
Route::get('/products/{id}', [ProductController::class, 'apiGetProduct']);

// Protected routes (require authentication)
Route::middleware('auth:sanctum')->group(function () {
    // User profile routes
    Route::get('/user', [ProfileController::class, 'show']);
    Route::put('/user/profile', [ProfileController::class, 'update']);
    Route::put('/user/password', [ProfileController::class, 'updatePassword']);
    Route::delete('/user/account', [ProfileController::class, 'deleteAccount']);
    
    // Logout route
    Route::post('/logout', [LoginController::class, 'logout']);
    
    // User buy/sell credit requests
    Route::get('/user/buy-requests', [\App\Http\Controllers\CarbonActivityController::class, 'apiUserBuyRequests']);
    Route::get('/user/sell-requests', [\App\Http\Controllers\CarbonActivityController::class, 'apiUserSellRequests']);
    Route::get('/user/orders', [\App\Http\Controllers\Admin\OrderController::class, 'apiUserOrders']);
});

// Cart API
// Route::post('/cart/add', [CartController::class, 'apiAdd']);
// Route::get('/cart', [CartController::class, 'apiView']);
// Route::post('/cart/remove', [CartController::class, 'apiRemove']);
// Route::post('/cart/decrement', [CartController::class, 'apiDecrement']);
// Route::post('/cart/clear', [CartController::class, 'apiClear']);
// Checkout API
Route::post('/checkout', [CheckoutController::class, 'apiCheckout']);
// Order API
Route::get('/orders', [OrderController::class, 'apiIndex']);
Route::get('/orders/{id}', [OrderController::class, 'apiShow']);

// Password Reset API
Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLink']);
Route::post('/reset-password', [PasswordResetController::class, 'resetPassword']);

// Carbon trading API routes
Route::post('/buy-request', [CarbonActivityController::class, 'apiSubmitBuyCredits']);
Route::post('/sell-request', [CarbonActivityController::class, 'apiSubmitSellRequest']);

// Test endpoint
Route::get('/test', function () {
    return response()->json(['message' => 'API is working!']);
});

?>