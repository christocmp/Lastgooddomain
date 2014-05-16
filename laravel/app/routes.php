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
    return View::make('main_search');
});

Route::post('search', function()
{
    //return 'hello world';
    print_r($_POST);
});

Route::get('domain', function()
{
    $domain = Domain::find(82714930);

    return $domain->domain_name . $domain->auction_type;

});

Route::get('login', 'SessionController@create');
Route::get('logout', 'SessionController@destroy');

