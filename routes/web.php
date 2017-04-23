<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of the routes that are handled
  | by your application. Just tell Laravel the URIs it should respond
  | to using a Closure or controller method. Build something great!
  |
 */

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('home', 'HomeController@index');
Route::get('module', 'ModuleController@index');
Route::get('get_module_list', 'ModuleController@moduleList');
Route::post('module_save', 'ModuleController@moduleSave');

Route::get('role', 'RoleController@index');
Route::get('get_role_list', 'RoleController@roleList');
Route::post('role_save', 'RoleController@roleSave');

Route::get('country', 'CountryController@index');
Route::get('get_country_list', 'CountryController@countryList');
Route::post('country_save', 'CountryController@countrySave');

Route::get('state', 'StateController@index');
Route::get('get_state_country_list', 'StateController@stateCountryList');
Route::get('get_state_list/{id}', 'StateController@stateList');
Route::get('get_city_list/{id}', 'CityController@cityList');
Route::post('state_save', 'StateController@stateSave');

Route::get('city', 'CityController@index');
Route::get('get_city_state_country_list', 'CityController@CityStateCountryList');
Route::post('city_save', 'CityController@citySave');

Route::get('fee_structure', 'FeeStructureController@classMaster');
Route::get('add_fee_structure', 'FeeStructureController@add');

Route::post('fee_structure_save', 'FeeStructureController@save');
Route::get('fee_rule', 'FeeRuleController@show');

Route::get('add_fee_rule', 'FeeRuleController@index');
Route::post('add_student', 'CreateStudentController@savestudent');

Route::get('updatetimezone/{time}', function ($time) {
    \Cookie::queue('timezone', $time, 43200);
});

Route::get('create_student', 'CreateStudentController@index');

Route::get('get_class', 'CreateStudentController@getClass');
Route::get('get_section', 'CreateStudentController@getSection');
Route::get('get_gender', 'CreateStudentController@getGender');
Route::get('get_category', 'CreateStudentController@getCategory');
Route::get('get_studenttype', 'CreateStudentController@getStudentType');
Route::get('get_suburb', 'CreateStudentController@getSuburb');

Route::get('sub_teach_assoc', 'timetable@createClassSubAssoc');
Route::get('timetable_season_group', 'timetable@createSeasonGroup');


Route::get('collection_type', 'CollectionTypeController@index');
Route::get('get_collectiontype_list', 'CollectionTypeController@collectiontypeList');
Route::get('get_all_collectiontype_list', 'CollectionTypeController@allCollectiontypeList');
Route::post('collectiontype_save', 'CollectionTypeController@collectiontypeSave');

Route::get('collection', 'CollectionController@index');
Route::get('get_collection_list', 'CollectionController@collectionList');
Route::get('get_all_collection_list', 'CollectionController@allCollectionList');
Route::post('collection_save', 'CollectionController@collectionSave');

Route::get('season_collection', 'timetable@getSeason');
Route::get('get_season', 'timetable@collectionIndex');

Route::get('student_profile','StudentProfile@index');

Route::get('other_log','Communication@otherlogIndex');
Route::get('phone_log','Communication@phonelogIndex');
Route::get('appointment','Communication@appointmentIndex');

Route::get('showother_log','Communication@otherlogIndex');
Route::get('phone_log','Communication@phonelogIndex');
Route::get('appointment','Communication@appointmentIndex');

Route::get('view_timetable','timetable@view_timetable');

Route::get('timetable_master','timetable@timetableMaster');