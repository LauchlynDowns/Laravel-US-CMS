<?php

use Illuminate\Support\Facades\Route;
use App\Models\content;
use App\Models\User;
use App\Http\Controllers\NewContentController;
use App\Http\Controllers\admincontroller;
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

// Routes for add content pages
Route::get('addcontent', [NewContentController::class, 'create'
])->middleware(['auth', 'verified'])->name('addcontent');

Route::post('submitcontent', [NewContentController::class, 'addnewcontent'])
->middleware(['auth', 'verified'])->name('submitcontent');


// routes for delete pages
Route::get('delete', [NewContentController::class, 'deletecontent'])
->middleware(['auth', 'verified'])->name('deletecontent');

Route::post('deletecontent', [NewContentController::class, 'delete'])
->middleware(['auth', 'verified'])->name('delete');


// routes for update pages
Route::post('updatecontent', [NewContentController::class, 'updatepage'])->middleware(['auth', 'verified'])->name('updatecontent');

Route::post('update', [NewContentController::class, 'update'])->middleware(['auth', 'verified'])->name('update');


//routes for admin panel
// Route::get('/adminpanel', function () {
//     $adminuser = User::First()->where('id', Auth::user()->id);
//      return view('adminpanel', [
//         'adminuser' => $adminuser,
//          'activeusers' => User::all()

//       ]);

    
// })->middleware(['auth', 'verified'])->name('adminpanel');



Route::get('adminpanel', [admincontroller::class, 'checkifadmin'])->middleware(['auth', 'verified'])->name('adminpanel');


require __DIR__.'/auth.php';
