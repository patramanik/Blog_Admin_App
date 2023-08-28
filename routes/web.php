<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\admin\CatagoryController;
use App\Http\Controllers\admin\AdminDashbordController;




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
    return view('welcome');
});

Route::get('/user/login', function () {
    return view('admin.category.login');
});

// Route::get('/admin/posts', function () {
//     return view('admin.blogPost.posts');
// });






// categori Routes
Route::get('/admin/category', [CatagoryController::class, 'index'])->name('admin.category.category');
Route::get('/admin/addcategory', [CatagoryController::class, 'create'])->name('admin.category.addCategory');
Route::Post('/admin/addcategory', [CatagoryController::class, 'store']);
Route::get('/admin/edit/{id}',[CatagoryController::class, 'edit'])->name('admin.category.edit');
Route::put('/admin/update/{id}',[CatagoryController::class, 'update']);
Route::get('/admin/destroy/{id}',[CatagoryController::class, 'destroy']);

// BlogPost
Route::get('/admin/posts', [BlogPostController::class, 'show'])->name('admin.blogPost.posts');
Route::get('/admin/addpost', [BlogPostController::class, 'create'])->name('admin.blogPost.addPost');



//
Route::get('/admin', [AdminDashbordController::class, 'index'])->name('admin.index');

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
