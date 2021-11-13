<?php
use App\Http\Controllers\AuthControllerApi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/list', [AuthControllerApi::class, 'list']);


//register new user
Route::post('/register', [AuthControllerApi::class, 'register']);
//login user
Route::post('/signin', [AuthControllerApi::class, 'signin']);


//using middleware
Route::group(['middleware' => ['auth:sanctum']], function () {
 Route::post('/sign-out', [AuthControllerApi::class, 'logout']);


});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

