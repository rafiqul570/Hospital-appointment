<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use App\Models\User;



//Role Management
Route::middleware('auth')->group(function () {
    Route::controller(HomeController::class)->group(function(){
        Route::get('/redirects', 'index')->name('redirects');
        
    });
});




Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
    Route::post('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





//Book Appointment

Route::controller(appointmentController::class)->group(function(){
    Route::get('/appointment/index', 'Index')->name('appointment.index');
    Route::get('/appointment/create', 'Create')->name('appointment.create');
    Route::post('/appointment/store', 'Store')->name('appointment.store');
    Route::get('/appointment/delete/{id}', 'Delete')->name('appointment.delete');  
});


//PageController

Route::controller(PageController::class)->group(function(){
    Route::get('/', 'HomePage')->name('homePage'); 
    Route::get('/pages/confirmation', 'confirmation')->name('pages.confirmation');
    Route::get('/pages/about', 'about')->name('pages.about');
    Route::get('/pages/services', 'services')->name('pages.services');
    Route::get('/pages/department', 'department')->name('pages.department');
    Route::get('/pages/departmentSingle/{id}/{slug}', 'departmentSingle')->name('pages.departmentSingle');
    Route::get('/pages/doctor', 'doctor')->name('pages.doctor');
    Route::get('/pages/doctorSingle/{id}/{slug}', 'doctorSingle')->name('pages.doctorSingle');
    Route::get('/pages/blog', 'blog')->name('pages.blog');
    Route::get('/pages/contact', 'contact')->name('pages.contact');
    Route::get('/pages/pageDetails/{id}/{slug}', 'pageDetails')->name('pages.pageDetails');
    Route::get('/pages/pageSingle/{id}/{slug}', 'pageSingle')->name('pages.pageSingle');
    Route::get('/pages/categoryPage/{id}/{slug}', 'categoryPage')->name('pages.categoryPage');
    
    
});



// CategoryController for category
Route::middleware('auth')->group(function () {
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/category/index', 'index')->name('category.index');
        Route::get('/category/create', 'create')->name('category.create');
        Route::post('/category/store', 'store')->name('category.store');
        Route::get('/category/edit/{id}', 'edit')->name('category.edit');
        Route::post('/category/update', 'update')->name('category.update');
        Route::get('/category/delete/{id}', 'delete')->name('category.delete');

    });
});



//PostController for Blog
Route::middleware('auth')->group(function () {
    Route::controller(PostController::class)->group(function(){
        Route::get('/post/index', 'index')->name('post.index');
        Route::get('/post/create', 'create')->name('post.create');
        Route::post('/post/store', 'store')->name('post.store');
        Route::get('/post/edit/{id}', 'edit')->name('post.edit');
        Route::post('/post/update', 'update')->name('post.update');
        Route::get('/post/delete/{id}', 'delete')->name('post.delete');

        Route::get('/post/editImage/{id}', 'editImage')->name('post.editImage');
        Route::post('/post/updateImage/', 'updateImage')->name('post.updateImage');

    });
});


// DoctorController for doctor
Route::middleware('auth')->group(function () {
    Route::controller(DoctorController::class)->group(function(){
        Route::get('/doctor/index', 'index')->name('doctor.index');
        Route::get('/doctor/create', 'create')->name('doctor.create');
        Route::post('/doctor/store', 'store')->name('doctor.store');
        Route::get('/doctor/edit/{id}', 'edit')->name('doctor.edit');
        Route::post('/doctor/update', 'update')->name('doctor.update');
        Route::get('/doctor/delete/{id}', 'delete')->name('doctor.delete');

        Route::get('/doctor/editImage/{id}', 'editImage')->name('doctor.editImage');
        Route::post('/doctor/updateImage/', 'updateImage')->name('doctor.updateImage');

    });
});

// DepartmentController for doctor
Route::middleware('auth')->group(function () {
    Route::controller(DepartmentController::class)->group(function(){
        Route::get('/department/index', 'index')->name('department.index');
        Route::get('/department/create', 'create')->name('department.create');
        Route::post('/department/store', 'store')->name('department.store');
        Route::get('/department/edit/{id}', 'edit')->name('department.edit');
        Route::post('/department/update', 'update')->name('department.update');
        Route::get('/department/delete/{id}', 'delete')->name('department.delete');

        Route::get('/department/editImage/{id}', 'editImage')->name('department.editImage');
        Route::post('/department/updateImage/', 'updateImage')->name('department.updateImage');

    });
});








require __DIR__.'/auth.php';
