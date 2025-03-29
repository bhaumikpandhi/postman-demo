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
    return 'Admin API are working!';
    //return response()->json('a', 503);
});


Route::get('/dashboard', function () {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    return response()->json(['message' => 'Admin Dashboard', 'status' => 'success']);
    //return response()->json('b', 500);
});

Route::get('/users', function () {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    return response()->json(['users' => ['Admin1', 'Admin2', 'Admin3'], 'request_id' => uniqid()]);
});

Route::post('/create-category', function () {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    return response()->json(['message' => 'Category Created', 'category_id' => rand(100, 999)]);
});

Route::put('/update-product/{id}', function ($id) {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    return response()->json(['message' => "Product $id Updated", 'timestamp' => time()]);
});

Route::delete('/delete-user/{id}', function ($id) {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    //return response()->json(['message' => "User $id Deleted", 'deleted_at' => date('Y-m-d H:i:s')]);
    //return response()->json('b', 422);
});

Route::get('/reports', function () {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    return response()->json(['report' => 'Monthly Sales Report', 'generated_at' => date('Y-m-d H:i:s')]);
});

Route::post('/send-notification', function () {
    if (rand(1, 10) <= 3) { usleep(rand(500000, 2000000)); }
    //return response()->json(['message' => 'Notification Sent', 'status' => 'success']);
    //return response()->json('b', 422);
});