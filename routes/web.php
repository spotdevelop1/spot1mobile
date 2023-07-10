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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return View::make('pages.content_index');
});

Route::get('/recarga', function(){
    return View::make('pages.recharge');
});

Route::get('/pago', function(){
    return View::make('pages.commerce');
})->name('pago');

Route::get('/planes', function(){
    return View::make('pages.planes');
});

Route::get('/mapa', function(){
    return View::make('pages.map');
});

Route::get('/consult-imei', function(){
    return View::make('pages.imei');
});


Route::post('/recargas', 'RechargeController@recharge')->name('recharges');

Route::get('/imei', 'RechargeController@imei')->name('imei');

// Route::get('/recarga', 'RechargeController@rechargeAll')->name('recharge');

Route::get('/references', 'OpenPayController@references')->name('references');

Route::post('/referencesOxxo', 'ConektaController@referencesOxxo')->name('referencesOxxo');

Route::post('/paymentStripe','StripeController@paymentStripe')->name('paymentStripe');

Route::get('/newClient', 'RechargeController@newClients')->name('newClient');
