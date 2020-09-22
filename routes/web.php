<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

//Admin Routes
Route::get('/admin/opportunity/total','AdminController@index');

Route::get('/admin/opportunity/open','AdminController@open');

Route::get('/admin/opportunity/closed','AdminController@closed');

Route::get('/admin/opportunity/{id}','AdminController@show');

Route::post('/admin/opportunity/update/{id}','AdminController@update');


Route::get('/admin/events','EventsController@admin');

Route::get('/admin/redheart','AdminController@redheart');

Route::get('/admin/fibre','AdminController@fibre');

Route::get('/admin/team','AdminController@team');


Route::get('/admin/redheart/{id}','AdminController@red');

Route::get('/admin/fibre/{id}','AdminController@fib');

Route::get('/admin/my/times','AdminController@mytime');

Route::post('/admin/clock/in','AdminController@clockin');

Route::post('/admin/clock/out','AdminController@checkout');



Route::get('/admin/outstanding/receivecof','AdminController@Receivecof');

Route::get('/admin/outstanding/cof2client','AdminController@cof2client');

Route::get('/admin/outstanding/followups','AdminController@followups');

Route::get('/admin/outstanding/cof2admin','AdminController@cof2admin');

Route::get('/admin/outstanding/inform','AdminController@inform');




//agent routes
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/opportunity/create', 'OpportunityController@create')->name('home');

Route::get('/opportunity/total', 'OpportunityController@main')->name('total');

Route::get('/opportunity/{id}','OpportunityController@show')->name('single');

Route::get('/current/outstanding/receivecof','OpportunityController@receivecof');

Route::get('/current/outstanding/cof2client','OpportunityController@cof2client');

Route::get('/current/outstanding/followups','OpportunityController@followups');

Route::get('/current/outstanding/cof2admin','OpportunityController@cof2admin');

Route::get('/current/outstanding/inform','OpportunityController@inform');

//new red heart
Route::get('/redheart','RedHeartController@create');
Route::post('/redheart/create','RedHeartController@store');
Route::get('/total/redheart','RedHeartController@index');
Route::get('/school/{id}','RedHeartController@show');
Route::post('/attachments/redheart/{id}','RedHeartController@docs');

//Fibre 
Route::get('/fibre','FibreController@create');
Route::post('/fibre/create','FibreController@store');
Route::get('/total/fibre','FibreController@index');
Route::get('/fibre/{id}','FibreController@show');
Route::post('/attachments/fibre/{id}','FibreController@docs');


//Update Tasks Status

Route::post('/task/update/status/receivecof','TasksController@receivecof');

Route::post('/task/update/status/Cof2Client','TasksController@Cof2Client');

Route::post('/task/update/status/FollowUp','TasksController@FollowUp');

Route::post('/task/update/status/Cof2Admin','TasksController@Cof2Admin');

Route::post('/task/update/status/InformClient','TasksController@InformClient');


//Management Reporting
Route::get('/reporting/outstanding/receivecof','ManageController@Receivecof');

Route::get('/reporting/outstanding/cof2client','ManageController@cof2client');

Route::get('/reporting/outstanding/followups','ManageController@followups');

Route::get('/reporting/outstanding/cof2admin','ManageController@cof2admin');

Route::get('/reporting/outstanding/inform','ManageController@inform');



Route::get('/opportunity/reporting/redheart','ManageController@redheart');

Route::get('/opportunity/reporting/fibre','ManageController@fibre');

Route::get('/reporting/school/{id}','ManageController@school');

//appointments

Route::get('/events/total','EventsController@index');

Route::post('/events/create','EventsController@store');


//Team Reporting
Route::get('/reporting/team/total','ManageController@team');

Route::get('/reporting/agent/opportunities/{id}','ManageController@agent');

Route::get('/reporting/opportunity/{id}','ManageController@show');

Route::get('/reporting/total/filter','ManageController@report');

//clocking times
Route::get('/checkIn','ClokingController@create');
Route::post('/clock/in','ClokingController@store');
Route::post('/clock/out','ClokingController@update');



//fullcalender
Route::get('/fullcalendar','FullCalendarController@index');
Route::post('/fullcalendar/create','FullCalendarController@create');
Route::post('/fullcalendar/update','FullCalendarController@update');
Route::post('/fullcalendar/delete','FullCalendarController@destroy');
