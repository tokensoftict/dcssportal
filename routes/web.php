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

Route::get('/candidates', ['as'=>'candidates',"uses"=>'HomeController@candidates']);

Route::get('/interview_status', ['as'=>'interview-status',"uses"=>'HomeController@interview_status']);

Route::post("/registerprocess",['as'=>'registerprocess', "uses"=>"HomeController@registerprocess"]);

Route::post("/loginprocess",['as'=>'loginprocess', "uses"=>"HomeController@loginprocess"]);

//Route::get("/branchcollect_transaction_hook/{application}/{transaction}", ['as' => 'branchcollect_callback', "uses" => "HomeController@branchcollect_callback"]);

//Route::get("/branchcollect_transaction_hook_thirdparty/{application}/{transaction}", ['as' => 'branchcollect_callback_thirldparty', "uses" => "HomeController@branchcollect_callback_thirldparty"]);

Route::prefix("update")->as("update.")->group(function (){

    Route::get('/url/{application}/{transaction}', ['as' => 'branchcollect_callback', "uses" => "HomeController@branchcollect_callback_thirldparty"]);

    Route::get('/thirdpartyurl/{application}/{transaction}', ['as'=>'branchcollect_transaction_hook_thirdparty',"uses" => "HomeController@branchcollect_callback_thirldparty"]);

});

Route::group(['middleware' => ['auth']], function() {

    Route::prefix('account')->as('account.')->group(function () {

        Route::get('/', ['as'=>'dashboard',"uses"=>'AccountController@index']);
        Route::get('/logout', ['as'=>'logout',"uses"=>'AccountController@logout']);
        Route::get('{user}/profile', ['as'=>'profile',"uses"=>'AccountController@profile']);
        Route::get('{application}/make-payment', ['as'=>'make_payment',"uses"=>'AccountController@make_payment']);
        Route::get('{application}/transactions', ['as'=>'transactions',"uses"=>'AccountController@transactions']);
        Route::get('{application}/complete-application', ['as'=>'complete_application',"uses"=>'AccountController@complete_application']);
        Route::get('{application}/edit-application', ['as'=>'edit_application',"uses"=>'AccountController@edit_application']);
        Route::get('{application}/print-photocard', ['as'=>'print_photocard',"uses"=>'AccountController@print_photocard']);
        Route::get('{application}/download-photocard', ['as'=>'download_photocard',"uses"=>'AccountController@download_photocard']);
        Route::get('{application}/download-payment-receipt', ['as'=>'download_payment_receipt',"uses"=>'AccountController@download_payment_receipt']);

        Route::get('{transaction}/download-payment-slip', ['as'=>'download_payment_slip',"uses"=>'AccountController@download_payment_slip']);
    });

    Route::group(['middleware' => ['isnotadmin']], function() {
        Route::prefix('administrator')->as('administrator.')->group(function () {
            Route::get('/', ['as'=>'index',"uses"=>'AdministratorController@index']);
            Route::get('/user/create', ['as'=>'new_user',"uses"=>'AdministratorController@new_user']);
            Route::get('/user/list', ['as'=>'list_user',"uses"=>'AdministratorController@list_user']);
            Route::get('/user/{user}/edit', ['as'=>'edit_user',"uses"=>'AdministratorController@edit_user']);
            Route::get('/new-application', ['as'=>'new-application',"uses"=>'AdministratorController@new_application']);
            Route::get('/myapplication', ['as'=>'myapplication',"uses"=>'AdministratorController@myapplication']);
            Route::get('/view-application', ['as'=>'view_application',"uses"=>'AdministratorController@view_application']);
            Route::get('/reports', ['as'=>'reports',"uses"=>'AdministratorController@reports']);
            Route::get('/reports_by_center', ['as'=>'reports_by_center',"uses"=>'AdministratorController@reports_by_center']);
            Route::get('/reports_by_school', ['as'=>'reports_by_school',"uses"=>'AdministratorController@reports_by_school']);
            Route::get('/reports_by_status', ['as'=>'reports_by_status',"uses"=>'AdministratorController@reports_by_status']);
            Route::get('/settings', ['as'=>'settings',"uses"=>'AdministratorController@settings']);
            Route::get('/interview_upload', ['as'=>'interview_upload',"uses"=>'AdministratorController@interview_upload']);
            Route::get('/upload_candidate', ['as'=>'upload_candidate',"uses"=>'AdministratorController@upload_candidate']);
            Route::match(['get', 'post'],'/export', ['as'=>'export', 'uses'=>'AdministratorController@export']);
        });
    });

});
