<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
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

// read category
Route::get("/category", [CategoryController::class, "index"]);
Route::get("/category/detail/{id}", [CategoryController::class, "show"]);

// create category
Route::get("/category/create", [CategoryController::class, "create"]);
Route::post("/category/create", [CategoryController::class, "store"]);

// Update
Route::get("category/{id}/edit", [CategoryController::class, "edit"]);
Route::put("/category/{id}/edit", [CategoryController::class, "update"]);

// Delete
Route::delete("/category/{id}/delete", [CategoryController::class, "delete"]);