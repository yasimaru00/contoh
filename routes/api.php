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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
	'prefix' => 'auth'
], function () {
	Route::post('login', 'AuthController@login');
	Route::post('register', 'AuthController@register');

	Route::group([
    	'middleware' => 'auth:api'
  	], function() {
    	Route::get('logout', 'AuthController@logout');
    	Route::get('user', 'AuthController@user');
  	});
});

/**
 * START FROM HERE
 */

use App\Http\Controllers\PassportAuthController;
Route::group(['namespace' => 'Api\V1\Passport', 'prefix' => 'v1/passport'], function() {
	Route::post('register', 'PassportAuthController@register')->name('api-register');
	Route::any('verify', 'PassportAuthController@verify')->name('api-verify');
	Route::post('login', 'PassportAuthController@login');
	Route::group(['middleware' => 'auth:api'], function() {
		Route::post('logout', 'PassportAuthController@logout');
		Route::post('user', 'PassportAuthController@user');
	});
});

Route::group(['namespace' => 'Api\V1\Master', 'prefix' => 'v1/master', 'middleware' => 'auth:api'], function() {
	Route::get('company', 'CompanyController@index');
	Route::get('company/{id}', 'CompanyController@find');

	Route::get('city', 'CityController@index');
	Route::get('city/{uuid}', 'CityController@find');

	Route::get('employment', 'EmploymentController@index');
	Route::get('employment/{uuid}', 'EmploymentController@find');

	Route::get('level', 'LevelController@index');
	Route::get('Level/{uuid}', 'LevelController@find');

	Route::get('field', 'FieldController@index');
	Route::get('field/{uuid}', 'FieldController@find');

	Route::get('education', 'EducationController@index');
	Route::get('education/{uuid}', 'EducationController@find');

	Route::get('perk', 'PerkController@index');
	Route::get('perk/{uuid}', 'PerkController@find');

	Route::get('currency', 'CurrencyController@index');

	Route::get('marriage', 'MarriageController@index');
	
	Route::get('ownership', 'OwnershipController@index');
	Route::get('background_family', 'BackgroundFamilyController@index');
});

Route::get('v1/vacancy/paginate', 'Api\V1\VacancyController@paginate');
Route::group(['namespace' => 'Api\V1', 'prefix' => 'v1', 'middleware' => 'auth:api'], function() {
	Route::group(['prefix' => 'vacancy'], function() {
		Route::get('/', 'VacancyController@index');
		Route::get('/{id}', 'VacancyController@find');
		Route::post('/create', 'VacancyController@create');
		Route::post('/update', 'VacancyController@update');
		Route::post('/delete', 'VacancyController@delete');
	});
	Route::group(['prefix' => 'applicant-form'], function() {
		Route::get('/', 'ApplicationFormController@index');
		Route::get('/{id}', 'ApplicationFormController@find');
		Route::post('/create', 'ApplicationFormController@create');
		Route::post('/update', 'ApplicationFormController@update');
		Route::post('/delete', 'ApplicationFormController@delete');
	});
});