<?php

use Illuminate\Support\Facades\Route;
use App\Models\content;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'contents' => content::all()
    ]);
    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/mycontent', function () {
    return view('dashboard', [
        'contents' => content::all()
    ]);
})->middleware(['auth', 'verified'])->name('mycontent');

Route::get('/allcontent', function () {
    return view('dashboard', [
        'contents' => content::all()
    ]);
})->middleware(['auth', 'verified'])->name('allcontent');

Route::get('/addcontent', function () {
    return view('addcontent', [
        'contents' => content::all()
    ]);
})->middleware(['auth', 'verified'])->name('addcontent');

Route::get('/mycontent', function () {
    return view('mycontent', [
        'contents' => content::all()
    ]);
})->middleware(['auth', 'verified'])->name('mycontent');


require __DIR__.'/auth.php';
