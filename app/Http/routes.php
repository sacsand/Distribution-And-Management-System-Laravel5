<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

//Route::get('product', 'ProductController@index');
//Route::get('product/create', 'ProductController@create');
//Route::post('product', 'ProductController@store');
//Route::get('product/{id}/edit','ProductController@edit');

Route::resource('product','ProductController');
Route::resource('stock','StockController');

Route::resource('target','TargetController');
Route::resource('incentive','IncentiveController');

Route::resource('shop','ShopController');
Route::get('shop/admin/index/','ShopController@index_admin');
Route::get('shop/sales/{id}','ShopController@shopAdd');

//salesperson view controller
Route::get('salesperson/stock/{territory}','SalespersonController@getStock');
Route::get('salesperson/sales/{territory}','SalespersonController@getSalesMonthly');
Route::get('salesperson/csales/{territory}','SalespersonController@getSalesAll');
Route::get('salesperson/incentive/{territory}','SalespersonController@getIncentiveMonth');
Route::get('salesperson/target/{territory}','SalespersonController@getTargetComplete');

Route::get('salesperson/dashboard/','SalespersonController@getDashboard');
Route::get('test/{territory}', function ($territory, $productId='P003') {

$MonthlySale=App\Sales::getSummerySales_Month($territory) ;
	return $MonthlySale;

});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
