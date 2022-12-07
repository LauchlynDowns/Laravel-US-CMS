<?php

use Illuminate\Support\Facades\Route;
use App\Models\content;
use App\Http\Controllers\NewContentController;
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



Route::get('/mycontent', function () {
    return view('mycontent', [
        'contents' => content::all()->where('userid', Auth::user()->id)
    ]);
})->middleware(['auth', 'verified'])->name('mycontent');


Route::get('addcontent', [NewContentController::class, 'create'])->middleware(['auth', 'verified'])->name('addcontent');
Route::post('submitcontent', [NewContentController::class, 'addnewcontent'])->middleware(['auth', 'verified'])->name('addcontent');

require __DIR__.'/auth.php';
