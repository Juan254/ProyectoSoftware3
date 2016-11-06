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
   return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
   
   Route::resource('users' , 'UsersController');

   Route::resource('material_provider', 'MaterialProviderController');

   Route::get('material_provider/{id}/destroy', [
   			'uses'   =>	'MaterialProviderController@destroy',
   			'as'     =>	'material_provider.destroy'
   	]);


   Route::resource('person', 'PersonsController');

   
   Route::get('person/{id}/{social_number}/destroy', [
            'uses'   => 'PersonsController@destroy',
            'as'     => 'person.destroy'
      ]);


   Route::resource('activity', 'ActivityController');

   Route::get('activity/{id}/{social_number}/destroy', [
        'uses'   => 'ActivityController@destroy',
        'as'     => 'activity.destroy'
   ]);

   Route::resource('constant', 'ConstantsController');

   Route::get('indicator/indexIndicatorTwo', [
            'uses'   => 'indicatorsController@indexIndicatorTwo',
            'as'     => 'indicators.indexIndicatorTwo'
   ]);


   Route::get('indicator/indexIndicatorThree', [
            'uses'   => 'indicatorsController@indexIndicatorThree',
            'as'     => 'indicators.indexIndicatorThree'
   ]);

   Route::resource('indicator', 'IndicatorsController');

   Route::get('socialIndicator/{social_number}/more', [
         'uses'   => 'socialIndicatorController@more',
         'as'     => 'socialIndicator.more'
   ]);


   Route::resource('socialIndicator', 'socialIndicatorController');

   
});