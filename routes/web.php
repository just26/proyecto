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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');
Route::delete('users/destroyAll', 'UserController@destroyAll')->name('users.destroyAll');

Route::delete('patients/destroyAll','PatientController@destroyAll')->name('patients.destroyAll');
Route::get('patients/showdetails/{id}', 'PatientController@showdetails')->name('patients.showdetails');
Route::get('patients/createdetails', 'PatientController@createdetails')->name('patients.createdetails');
Route::post('patients/storedetails', 'PatientController@storedetails')->name('patients.storedetails');
Route::get('patients/{id}/editdetails', 'PatientController@editdetails')->name('patients.editdetails');
Route::put('patients/updatedetails/{id}', 'PatientController@updatedetails')->name('patients.updatedetails');

Route::get('patients/showsurgeries/{id}', 'PatientController@showsurgeries')->name('patients.showsurgeries');

Route::get('patients/createsurgeries', 'PatientController@createsurgeries')->name('patients.createsurgeries');
Route::post('patients/storesurgeries', 'PatientController@storesurgeries')->name('patients.storesurgeries');

Route::resource('patients', 'PatientController');



Route::delete('doctors/destroyAll','DoctorController@destroyAll')->name('doctors.destroyAll');
Route::resource('doctors', 'DoctorController');

Route::delete('nurses/destroyAll','NurseController@destroyAll')->name('nurses.destroyAll');
Route::resource('nurses', 'NurseController');

Route::delete('surgeries/destroyAll','SurgeryController@destroyAll')->name('surgeries.destroyAll');
Route::resource('surgeries', 'SurgeryController');

Route::delete('diseases/destroyAll','DiseaseController@destroyAll')->name('diseases.destroyAll');
Route::resource('diseases', 'DiseaseController');

Route::get('/home', 'HomeController@index');