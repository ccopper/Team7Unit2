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

Route::get('/', function()
{
	$pets = Pet::all();
	return View::make('index')->with('pets', $pets)->with('count', $pets->count());
});
Route::get('/pets', function()
{
	$pets = Pet::all();
	return View::make('index')->with('pets', $pets)->with('count', $pets->count());
});
Route::get('/dogs', function()
{
	$pets = Pettype::where('name', 'Dog')->first();
	return View::make('index')->with('pets', $pets->pets)->with('count', $pets->pets->count());
});
Route::get('/orderby', function()
{
	$pets = Pet::orderBy('Age', 'DESC')->get();
	return View::make('index')->with('pets', $pets)->with('count', $pets->count());
});

