<?php

use App\Http\Controllers\AnimalControler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// methode get end point untuk animals
Route::get("/animals",[AnimalControler::class, "index"]);

// method post, endpoint animals
Route::post("/animals",[AnimalControler::class, "store"]);

// method put 
Route::put("/animals/{id}",[AnimalControler::class, "update"]);

// method delete
Route::delete("/animals/{id}",[AnimalControler::class, "destroy"]);


