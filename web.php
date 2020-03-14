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

Route::view('create','signup1');
Route::post('signup','Users@insert');

Route::view('signin','signin1');
Route::post('submit','Users@match');

Route::view('studenthome','studentform');
Route::post('studentsubmit','Users@stusubmit');

Route::view('studentdetailshow','studentdetailshow');
Route::get('stushow','User@stuShow');

Route::get('studentupdate/{id}','Users@editstudent');
Route::post('updatestudent','Users@updateStudentDetails');

Route::view('studentdelete/{id}','studentdetaildelete');
Route::get('studentdeleted/{id}','Users@deleteStudentdetails');


Route::view('image-upload', 'ImageUpload');
Route::post('image-uploaded', 'Imageuploads@imageUploadPost')->name('image.upload.post');

Route::get('image', 'Imagecontroller@index');
Route::post('save', 'Imagecontroller@save');
Route::get('profile', 'Imagecontroller@profile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
