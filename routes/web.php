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

Route::get('/','HomeController@index');
Route::post('/subscribe','HomeController@subscribe');
Route::get('/about','HomeController@about');
Route::get('/category_courses/{category}','HomeController@category_courses');
Route::post('/contact_us','HomeController@contact_us');

Route::get('/message', function(){
    $msg = session('msg');
    return view('portal.message',compact('msg'));
});
//--------------------------------------

/*Route::get('/testUrl', function(){
    return url(Storage::url('image1.jpg'));
});*/
//-------------------admin panel routes-------------------
Route::get('/Admin','AdminHomeController@index');
Route::get('/Admin/Starter','AdminHomeController@Starter');
//--------------------------------------------------------

