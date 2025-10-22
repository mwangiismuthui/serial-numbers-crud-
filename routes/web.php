<?php

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

Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// // Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');


// Password Reset Routes...
Route::get('password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset']);

Route::get('/our-gallery', [App\Http\Controllers\HomeController::class, 'galleryFront'])->name('gallery');
Route::post('/Sendemail', [App\Http\Controllers\HomeController::class, 'Sendemail'])->name('Sendemail');

Route::post('/confirm_sno', [App\Http\Controllers\HomeController::class, 'confirm_sno'])->name('confirm_sno');

Route::group(['middleware' => 'auth'], function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/index', [App\Http\Controllers\HomeController::class, 'AdminIndex'])->name('admin.index');
Route::post('/admin/store', [App\Http\Controllers\HomeController::class, 'AdminStore'])->name('admin.store');
Route::delete('/admin/destroy/', [App\Http\Controllers\HomeController::class, 'AdminDestroy'])->name('admin.destroy');
Route::patch('/admin/update/', [App\Http\Controllers\HomeController::class, 'AdminUpdate'])->name('admin.update');
Route::get('/admin/gallery/', [App\Http\Controllers\HomeController::class, 'gallery'])->name('admin.gallery');
Route::post('/admin/gallery/store', [App\Http\Controllers\HomeController::class, 'galleryStore'])->name('admin.gallery.store');
Route::get('/admin/gallery/destroy/{id}', [App\Http\Controllers\HomeController::class, 'galleryDestroy'])->name('admin.gallery.destroy');

Route::resource('serialnumber', App\Http\Controllers\SerialNumberController::class);

Route::get('profile', function(){
    return view('profile');
});

/* View Composer*/
View::composer(['*'], function($view){
    
    $user = Auth::user();
    $view->with('user',$user);
    

    

});
});

