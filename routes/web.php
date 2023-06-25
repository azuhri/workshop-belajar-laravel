<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test', function () {
    return view('welcome');
});

Route::get("pertambahan", [UserController::class,"pertambahan"]);
Route::get("perkalian/{angka1}/{angka2}", [UserController::class,"perkalian"]);

Route::get("user", [UserController::class, "indexUser"]);
Route::get("user/edit/{userId}", [UserController::class, "editUser"])->name("edit.user");
Route::post("user/edit/{userId}", [UserController::class, "postEditUser"])->name("edit.user.post");
Route::get("user/delete/{userId}", [UserController::class, "deleteUser"])->name("delete.user");