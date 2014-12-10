<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('imei/{imei}/temp1/{temp1}/temp2/{temp2}', 'GetTempController@store');

Route::get('otm', array('uses' => 'HomeController@showview'));
#Route::get('otm', array('uses' => 'HomeController@doview'));


//shows view of otms(otms.blade.php)
//Route::get('otms', function()
//{
//	return View::make('otms');
//});