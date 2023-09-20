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
Route::post('/admin/addpost', [BlogPostController::class, 'submit']);
Route::post('/admin/upload', [BlogPostController::class, 'upload'])->name('admin.blogPost.upload');
Route::get('/admin/editPost/{id}', [BlogPostController::class, 'edit'])->name('admin.blogPost.editPost');
Route::put('/admin/updatepost/{id}', [BlogPostController::class, 'update']);
Route::get('/admin/destroypost/{id}', [BlogPostController::class, 'destroy']);
//aditionl
Route::get('/admin/postview', [BlogPostController::class, 'view'])->name('admin.blogPost.view');


// Route::post('/admin/addpost', [BlogPostController::class, 'store']);
// Route::get('/admin/cat', [BlogPostController::class, 'pshow']);
 Route::get('/dashbord/catagory', [AdminDashbordController::class, 'catagory']);




//Admin Routes
Route::get('dashboard', [AdminDashbordController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
