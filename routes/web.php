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

//Route::mediaLibrary();

Route::get('/', ['as'=>'index',"uses"=>'HomeController@index']);

Route::get('/login', ['as'=>'login',"uses"=>'HomeController@login']);

Route::get('/register', ['as'=>'register',"uses"=>'HomeController@register']);

Route::get('/news', ['as'=>'news',"uses"=>'HomeController@news']);

Route::get('/contact', ['as'=>'contact',"uses"=>'HomeController@contact']);

Route::post("/registerprocess",['as'=>'registerprocess', "uses"=>"HomeController@registerprocess"]);

Route::post("/loginprocess",['as'=>'loginprocess', "uses"=>"HomeController@loginprocess"]);

Route::group(['middleware' => ['auth']], function() {

    Route::prefix('account')->as('account.')->group(function () {

        Route::get('/', ['as'=>'dashboard',"uses"=>'AccountController@index']);
        Route::get('/logout', ['as'=>'logout',"uses"=>'AccountController@logout']);
        Route::get('/profile', ['as'=>'profile',"uses"=>'AccountController@profile']);
        Route::get('{application}/make-payment', ['as'=>'make_payment',"uses"=>'AccountController@make_payment']);
        Route::get('{application}/complete-application', ['as'=>'complete_application',"uses"=>'AccountController@complete_application']);
        Route::get('{application}/print-photocard', ['as'=>'print_photocard',"uses"=>'AccountController@print_photocard']);
        Route::get('{application}/download-photocard', ['as'=>'download_photocard',"uses"=>'AccountController@download_photocard']);
        Route::get('{application}/download-payment-receipt', ['as'=>'download_payment_receipt',"uses"=>'AccountController@download_payment_receipt']);
    });

});
