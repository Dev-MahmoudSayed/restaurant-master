<?php

use App\Models\Menu;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[HomeController::class,"index"]);

Route::get("/users",[AdminController::class,"user"]);

Route::get("/foodMenu",[AdminController::class,"foodMenu"]);

Route::get("/showMenu",[AdminController::class,"showMenu"]);

 Route::get("/deleteMenu/{id}",[AdminController::class,"deleteMenu"]);

Route::get("/updateView/{id}",[AdminController::class,"updateView"]);

Route::post("/update/{id}",[AdminController::class,"update"]);

Route::post("/uploadFood",[AdminController::class,"upload"]);

Route::get("deleteUser/{id}",[AdminController::class,"deleteUser"]);

Route::get("/redirects",[HomeController::class,"redirects"]);





Route::get("/viewCon",[AdminController::class,"viewCon"]);

Route::get("/viewChef",[AdminController::class,"viewChef"]);

Route::post("/uploadChef",[AdminController::class,"uploadChef"]);
Route::get("/editChef/{id}",[AdminController::class,"editChef"]);

Route::post("/updatedChef/{id}",[AdminController::class,"updatedChef"]);
Route::get("/deleteChef/{id}",[AdminController::class,"deleteChef"]);

Route::get("deleteCon/{id}",[AdminController::class,"deleteCon"]);

Route::post("/addCard/{id}",[HomeController::class,"addCard"]);

Route::get("/conFact",[ContactController::class,"index"]);
Route::post("/conFact",[ContactController::class,"conFact"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
