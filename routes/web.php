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

Auth::routes();
Auth::routes(['register' => false]);


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/index', 'HomeController@AdminIndex')->name('admin.index');
Route::post('/admin/store', 'HomeController@AdminStore')->name('admin.store');
Route::delete('/admin/destroy/', 'HomeController@AdminDestroy')->name('admin.destroy');
Route::patch('/admin/update/', 'HomeController@AdminUpdate')->name('admin.update');
Route::post('/confirm_sno', 'HomeController@confirm_sno')->name('confirm_sno');

Route::resource('serialnumber','SerialNumberController');

Route::get('profile', function(){
    return view('profile');
});

/* View Composer*/
View::composer(['*'], function($view){
    
    $user = Auth::user();
    $view->with('user',$user);
    

    

});

