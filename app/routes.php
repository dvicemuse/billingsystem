<?php

//DASHBOARD ROUTING
Route::get('/', array(
  'as' => 'dashboard',
  'uses' => 'DashboardController@showIndex'
));

//CLIENTS ROUTING
Route::get('clients', array(
  'as' => 'clients',
  'uses' => 'ClientsController@showIndex'
));

Route::get('clients/new', array(
  'as' => 'newClient',
  'uses' => 'ClientsController@newClient'
));

Route::get('clients/edit/{id}', array(
  'as' => 'editClient',
  'uses' => 'ClientsController@editClient'
));

Route::get('clients/delete', array(
  'as' => 'deleteClient',
  'uses' => 'ClientsController@editClient'
));

Route::get('clients/activate', array(
  'as' => 'activateClient',
  'uses' => 'ClientsController@editClient'
));

Route::get('clients/deactivate', array(
  'as' => 'deactivateClient',
  'uses' => 'ClientsController@editClient'
));

Route::post('clients/add', function(){
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
});


//CLASSES ROUTING
Route::get('classes', array(
  'as' => 'classes',
  'uses' => 'ClassesController@showIndex'
));

Route::get('classes/new', array(
  'as' => 'newClass',
  'uses' => 'ClassesController@newClass'
));

Route::get('classes/edit/{id}', array(
  'uses' => 'ClassesController@editClass'
));

Route::get('classes/delete/{id}', array(
  'uses' => 'ClassesController@showIndex'
));

Route::post('classes/add', function(){
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
});



//TEACHERS ROUTING
Route::get('teachers', array(
  'as' => 'teachers',
  'uses' => 'TeachersController@showIndex'
));
Route::post('teachers/add', array(
  'uses'=>'TeachersController@addTeacher'
));

Route::get('teachers/new', array(
	'as' => 'newTeacher',
	'uses' => 'TeachersController@newTeacher'
));

Route::get('teachers/edit/{id}', array(
  'as' => 'editTeacher',
  'uses' => 'TeachersController@editTeacher'
));

Route::get('teachers/activate/{id}', array(
  'as' => 'activateTeacher',
  'uses' => 'TeachersController@showIndex'
));

Route::get('teachers/delete/{id}', array(
  'as' => 'deleteTeacher',
  'uses' => 'TeachersController@showIndex'
));


//EVENTS ROUTING
Route::get('events', array(
  'as' => 'events',
  'uses' => 'EventsController@showIndex'
));

Route::post('events/add', array(
  'uses' => 'EventsController@addEvent'
));

Route::get('events/new', array(
  'as' => 'newEvent',
  'uses' => 'EventsController@newEvent'
));

Route::post('events/add', array(
  'uses' => 'EventsController@addEvent'
));

Route::get('events/edit/{id}', array(
  'uses' => 'EventsController@editEvent'
));

//PACKAGES ROUTING
Route::get('view-packages', array(
  'as' => 'packages',
  'uses' => 'PackagesController@showIndex'
));

Route::get('view-packages/new', array(
  'as' => 'newPackage',
  'uses' => 'PackagesController@newPackage'
));

Route::get('view-packages/edit/{id}', array(
  'as' => 'editPackage',
  'uses' => 'PackagesController@editPackage'
));



//SETTINGS ROUTING
Route::get('settings', array(
  'as' => 'settings',
  'uses' => 'SettingsController@showIndex'
));


