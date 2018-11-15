<?php

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

// Front end all route
Route::get('/','frontEnd\frontEndController@index');
Route::get('/about-us','frontEnd\frontEndController@about');
Route::get('/product/{code}','frontEnd\frontEndController@details'); 
Route::get('/contact-us','frontEnd\frontEndController@contact'); 
Route::get('/category/{category}','frontEnd\frontEndController@category'); 
Route::post('visitor/contact', 'visitorcontactController@visitorcontact');


Auth::routes();
Route::group(['as'=>'superadmin.', 'prefix'=>'superadmin', 'namespace'=>'superadmin','middleware'=>[ 'auth', 'superadmin']], function(){
 Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
 // panel user route==
 	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
	Route::get('/user/add', 'userController@add_user');
	Route::post('/user/save', 'userController@save_user');
	Route::get('/user/edit/{id}', 'userController@edit_user');
	Route::post('/user/update', 'userController@update_user');
	Route::get('/user/manage', 'userController@manage_user');
	Route::post('/user/inactive', 'userController@inactive_user');
	Route::post('/user/active', 'userController@active_user');
	Route::post('/user/delete', 'userController@destroy_user');
});

Route::group(['as'=>'admin.', 'prefix'=>'admin', 'namespace'=>'admin','middleware'=>['auth', 'admin']], function(){
 Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

Route::group(['as'=>'editor.', 'prefix'=>'editor', 'namespace'=>'editor','middleware'=>['auth', 'editor']], function(){
 	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
 
    // Logo route here
    Route::get('/logo/add','logoController@add');
    Route::post('/logo/save','logoController@store');
    Route::get('/logo/manage','logoController@manage');
    Route::get('/logo/edit/{id}','logoController@edit');
    Route::post('/logo/update','logoController@update');
    Route::post('/logo/unpublished','logoController@unpublished');
    Route::post('/logo/published','logoController@published');
    Route::post('/logo/delete','logoController@destroy');

    // Slider route here
    Route::get('/slider/add','sliderController@add');
    Route::post('/slider/save','sliderController@store');
    Route::get('/slider/manage','sliderController@manage');
    Route::get('/slider/edit/{id}','sliderController@edit');
    Route::post('/slider/update','sliderController@update');
    Route::post('/slider/unpublished','sliderController@unpublished');
    Route::post('/slider/published','sliderController@published');
    Route::post('/slider/delete','sliderController@destroy');


    // Categor route here
    Route::get('/category/add','categoryController@add');
    Route::post('/category/save','categoryController@store');
    Route::get('/category/manage','categoryController@manage');
    Route::get('/category/edit/{id}','categoryController@edit');
    Route::post('/category/update','categoryController@update');
    Route::post('/category/unpublished','categoryController@unpublished');
    Route::post('/category/published','categoryController@published');

 	// Product route here
    Route::get('/product/add','productController@add');
    Route::post('/product/save','productController@store');
    Route::get('/product/manage','productController@manage');
    Route::get('/product/edit/{id}','productController@edit');
    Route::post('/product/update','productController@update');
    Route::post('/product/unpublished','productController@unpublished');
    Route::post('/product/published','productController@published');
    Route::post('/product/delete','productController@destroy');


    // Product route here
    Route::get('/contact/manage','contactController@index')->name('contact.manage');
    Route::get('/contact/create','contactController@create');
    Route::get('/contact/edit/{id}','contactController@edit');
    Route::post('/contact/store','contactController@store');
    Route::post('/contact/update/{id}','contactController@update');
    Route::post('/contact/status/{id}','contactController@status');
    Route::post('/contact/delete/{id}','contactController@destroy');

    
});


Route::group(['as'=>'author.', 'prefix'=>'author', 'namespace'=>'author','middleware'=>['auth', 'author']], function(){
 Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

// other route

Route::get('password/change', 'ChangePassController@index');
Route::post('password/updated', 'ChangePassController@updated');