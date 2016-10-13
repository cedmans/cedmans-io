<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:api');

$nonViewRoutes = ['store', 'destroy', 'update'];
$viewRoutesOnlySetting = ['except' => $nonViewRoutes];

Route::get('/', 'IndexController@index');

Route::resource('users', 'UserController', $viewRoutesOnlySetting);
Route::resource('skills', 'SkillController', $viewRoutesOnlySetting);
Route::resource('categories', 'CategorySkillController', $viewRoutesOnlySetting);
Route::resource('countries', 'CountryController', $viewRoutesOnlySetting);
Route::resource('provinces', 'ProvinceController', $viewRoutesOnlySetting);
Route::resource('cities', 'CityController', $viewRoutesOnlySetting);
Route::resource('locations', 'LocationController', $viewRoutesOnlySetting);
Route::resource('organizations', 'OrganizationController', $viewRoutesOnlySetting);
Route::resource('occupations', 'OccupationController', $viewRoutesOnlySetting);
Route::resource('duties', 'DutyController', $viewRoutesOnlySetting);
Route::resource('education', 'EducationController', $viewRoutesOnlySetting);
Route::resource('certifications', 'CertificationController', $viewRoutesOnlySetting);
Route::resource('projects', 'ProjectController', $viewRoutesOnlySetting);
