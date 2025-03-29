<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('/test-api', function (Request $request) {
    return 'Byuer API are working!';
});

Route::get('/products', function () {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    return response()->json(['products' => ['ProductA', 'ProductB', 'ProductC'], 'request_id' => uniqid()]);
});

Route::get('/cart', function () {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    return response()->json(['cart' => ['Item1', 'Item2'], 'cart_id' => rand(500, 999)]);
});

Route::post('/checkout', function () {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    return response()->json(['message' => 'Checkout Successful', 'order_id' => 'ORD-' . rand(1000, 9999)]);
});

Route::get('/orders', function () {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    return response()->json(['orders' => ['Order1', 'Order2'], 'user_token' => bin2hex(random_bytes(8))]);
});

Route::get('/order/{id}', function ($id) {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    return response()->json(['order' => "Details of Order $id"]);
});

Route::delete('/cancel-order/{id}', function ($id) {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    return response()->json(['message' => "Order $id Canceled", 'canceled_at' => date('Y-m-d H:i:s')]);
});

Route::post('/apply-coupon', function () {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    return response()->json(['message' => 'Coupon Applied', 'discount' => rand(5, 20)]);
});