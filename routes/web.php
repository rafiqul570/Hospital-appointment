<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use App\Models\User;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




//Role Management
Route::middleware('auth')->group(function () {
    Route::controller(HomeController::class)->group(function(){
        Route::get('/redirects', 'index')->name('redirects');
        
    });
});


//frontend/Home Pages
Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'HomePage')->name('homePage');   
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





//Appointment Page
Route::middleware('auth')->group(function () {
Route::controller(appointmentController::class)->group(function(){
    Route::get('/appointment/index', 'Index')->name('appointment.index');
    Route::get('/appointment/create', 'Create')->name('appointment.create');
    Route::post('/appointment/store', 'Store')->name('appointment.store');
     Route::get('/appointment/delete/{id}', 'Delete')->name('appointment.delete');  
});

});



//Category
Route::middleware('auth')->group(function () {
Route::controller(categoryController::class)->group(function(){
    Route::get('/category/index', 'Index')->name('category.index');
    Route::get('/category/create', 'Create')->name('category.create');
    Route::post('/category/store', 'Store')->name('category.store');
    //Route::get('/category/delete/{id}', 'Delete')->name('category.delete');  
});

});






require __DIR__.'/auth.php';
