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
    return 'Seller API are working!';
});

Route::get('/dashboard', function () {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    return response()->json(['message' => 'Seller Dashboard', 'status' => 'active']);
});

Route::get('/products', function () {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    return response()->json(['products' => ['ProductX', 'ProductY'], 'seller_id' => 'SELLER-' . rand(100, 999)]);
});

Route::post('/add-product', function (Request $request) {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    return response()->json(['message' => 'Product Added', 'product_id' => rand(1000, 9999), 'name' => $request->input('name')]);
});

Route::put('/update-product/{id}', function ($id) {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    return response()->json(['message' => "Product $id Updated"]);
});

Route::delete('/delete-product/{id}', function ($id) {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    return response()->json(['message' => "Product $id Deleted", 'deleted_at' => date('Y-m-d H:i:s')]);
});

Route::post('/update-inventory', function () {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    return response()->json(['message' => 'Inventory Updated', 'stock' => rand(10, 500)]);
});

Route::get('/sales', function () {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    return response()->json(['sales' => ['Sale1', 'Sale2'], 'revenue' => rand(1000, 10000)]);
});