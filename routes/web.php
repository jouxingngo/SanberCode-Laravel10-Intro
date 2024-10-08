<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[DashboardController::class, "index"]);
Route::get('/register', [AuthController::class, "registerPage"]);
Route::post("/welcome", [AuthController::class, "registerPostWelcome"]);
Route::get("/table", function () {
    return view("table");
});
Route::get("/data-tables", function () {
    return view("datatables");
});