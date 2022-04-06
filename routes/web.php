<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BulkSmsController;
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

//Route::get('/', function () {
    //return view('welcome');
//});

// website links
Route::get('/how-to-use-jobfinder', 'MainController@help');
Route::get('/', 'MainController@index');


// Admin links
Route::get('/job', 'AdminController@jobs')->middleware('Admin');
Route::get('/users', 'AdminController@users')->middleware('Admin');
Route::get('admin/routes', 'DashboardController@admin');
Route::get('/applicants', 'AdminController@application');
Route::resource('/messages', 'MessageController');

// Jobseeker application link
Route::resource('/topjobs', 'SystemController');
Route::get('/application', 'AdminController@application');

// Authentication links
Auth::routes();

// Employer links
Route::get('employer/routes', 'DashboardController@employer');
Route::resource('/jobs', 'JobsController');
Route::resource('/applications', 'ApplicationController');

Route::resource('/shortlist', 'ShortlistController');
Route::resource('/profile', 'ProfileController');
Route::resource('/manager', 'ManagewebController');


Route::get('/approve/{id}', ['as' => 'disapprove', 'uses' => 'ShortlistController@disapprove']);
Route::get('/disapprove/{id}', ['as' => 'approve', 'uses' => 'ApplicationController@approve']);
Route::post('/ustatus/{id}', ['as' => 'status', 'uses' => 'AdminController@userStatus']);
Route::post('/jstatus/{id}', ['as' => 'status', 'uses' => 'AdminController@jobStatus']);
Route::post('/user/{id}', ['as' => 'destroy', 'uses' => 'AdminController@destroy']);



Route::get('/sendSMS/{id}', ['as' => 'text', 'uses' => 'BulkSmsController@index']);
Route::get('/getContact/{id}', ['as' => 'getPhone', 'uses' => 'BulkSmsController@getContact']);



