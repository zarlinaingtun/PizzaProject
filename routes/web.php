<?php

use App\Http\Controllers\PizzaControllers;
use App\Models\Pizza;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
Route::get('/home', ["App\Http\Controllers\PizzaControllers", 'index'])->name('home');
// Create
Route::post('/',[PizzaControllers::class,"insert"])->name("insert");
//Read
Route::get('/pizzas',[PizzaControllers::class,"pizzas"])->name("pizzas");
//Delete
Route::get('/pizzas/delete/{id}',[PizzaControllers::class,"delete"])->name("delete");
//Edit  
Route::get("/pizzas/edit/{id}",[PizzaControllers::class,"edit"])->name('edit');
//Update
Route::post('/pizzas/update/{id}',[PizzaControllers::class,"update"])->name('update');  

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');
