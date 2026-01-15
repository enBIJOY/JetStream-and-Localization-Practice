<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JetStreamController;

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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('locale/{locale}', function($locale){ 
    Session(['locale' => $locale]); 
    return back();
    })->name('locale');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('home', [JetStreamController::class, 'home'])->name('home');
Route::get('contact', [JetStreamController::class, 'contact'])->name('contact');
Route::get('about', [JetStreamController::class, 'about'])->name('about');
Route::get('pricing', [JetStreamController::class, 'pricing'])->name('pricing');
Route::get('project', [JetStreamController::class, 'project'])->name('project');
Route::get('service', [JetStreamController::class, 'service'])->name('service');

