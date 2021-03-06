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

Route::prefix('authenticate')->group(function(){
	Route::get('/login', 'AdminAuthController@getLogin')->name('admin.login');
	Route::post('/login', 'AdminAuthController@postLogin');
	
	Route::get('/dang-xuat', 'AdminAuthController@logoutAdmin')->name('admin.logout');
});

Route::prefix('admin')->middleware('CheckLoginAdmin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
    
    Route::group(['prefix' => 'category'], function(){
    	Route::get('/','AdminCategoryController@index')->name('admin.get.list.category');
		Route::get('/create','AdminCategoryController@create')->name('admin.get.create.category');
		Route::post('/create','AdminCategoryController@store');
		Route::get('/update/{id}','AdminCategoryController@edit')->name('admin.get.edit.category');
		Route::post('/update/{id}','AdminCategoryController@update');
	
		Route::get('/{action}/{id}','AdminCategoryController@action')->name('admin.get.action.category');
	});

    Route::group(['prefix' => 'singer-bands'], function(){
    	Route::get('/','AdminSingerBandController@index')->name('admin.get.list.singer-bands');
		Route::get('/create','AdminSingerBandController@create')->name('admin.get.create.singer-bands');
		Route::post('/create','AdminSingerBandController@store');
		Route::get('/update/{id}','AdminSingerBandController@edit')->name('admin.get.edit.singer-bands');
		Route::post('/update/{id}','AdminSingerBandController@update');

		Route::get('/delete/{id}','AdminSingerBandController@destroy')->name('admin.get.delete.singer-bands');
	});

    Route::group(['prefix' => 'supplier'], function(){
        Route::get('/','AdminSupplierController@index')->name('admin.get.list.supplier');
        Route::get('/create','AdminSupplierController@create')->name('admin.get.create.supplier');
        Route::post('/create','AdminSupplierController@store');
        Route::get('/update/{id}','AdminSupplierController@edit')->name('admin.get.edit.supplier');
        Route::post('/update/{id}','AdminSupplierController@update');

        Route::get('delete/{id}','AdminSupplierController@delete')->name('admin.get.delete.supplier');
    });
	
	Route::group(['prefix' => 'tour'], function(){
		Route::get('/','AdminToursController@index')->name('admin.get.list.tour');
		Route::get('/create','AdminToursController@create')->name('admin.get.create.tour');
		Route::post('/create','AdminToursController@store');
		Route::get('/update/{id}','AdminToursController@edit')->name('admin.get.edit.tour');
		Route::post('/update/{id}','AdminToursController@update');
        Route::get('/delete/{id}','AdminToursController@destroy')->name('admin.get.delete.tour');
        Route::get('/action/{id}','AdminTransactionController@action')->name('admin.get.action.tour');


    });

	// menu bai viet

    Route::group(['prefix' => 'menu'], function(){
        Route::get('/','AdminMenuController@index')->name('admin.get.list.menu');
        Route::get('/create','AdminMenuController@create')->name('admin.get.create.menu');
        Route::post('/create','AdminMenuController@store');
        Route::get('/update/{id}','AdminMenuController@edit')->name('admin.get.edit.menu');
        Route::post('/update/{id}','AdminMenuController@update');

        Route::get('delete/{id}','AdminMenuController@delete')->name('admin.get.delete.menu');
    });

	// bai viet
	Route::group(['prefix' => 'article'], function(){
		Route::get('/','AdminArticleController@index')->name('admin.get.list.article');
		Route::get('/create','AdminArticleController@create')->name('admin.get.create.article');
		Route::post('/create','AdminArticleController@store');
		Route::get('/update/{id}','AdminArticleController@edit')->name('admin.get.edit.article');
		Route::post('/update/{id}','AdminArticleController@update');
		Route::get('/delete/{id}','AdminArticleController@delete')->name('admin.get.delete.article');
		
		
		Route::get('/{action}/{id}','AdminArticleController@action')->name('admin.get.action.article');
	});
	
	//kho hang
	
	Route::group(['prefix' => 'warehouse'],function(){
		Route::get('/','AdminWarehouseController@getWarehousetour')->name('admin.get.warehouse.list');
	});
	
	// ql don hang
	Route::group(['prefix' => 'transaction'], function(){
		Route::get('/','AdminTransactionController@index')->name('admin.get.list.transaction');
		Route::get('/view/{id}','AdminTransactionController@viewOrder')->name('admin.get.view.order');
		Route::get('/delete/{id}','AdminTransactionController@delete')->name('admin.get.delete.order');
		Route::get('/active/{id}','AdminTransactionController@actionTransaction')->name('admin.get.active.transaction');
	});
	
	// ql thanh vien
	Route::group(['prefix' => 'user'], function(){
		Route::get('/','AdminUserController@index')->name('admin.get.list.user');
        Route::get('/delete/{id}','AdminUserController@delete')->name('admin.get.delete.user');
	});
	
	// ql danh gia
	Route::group(['prefix' => 'rating'], function(){
		Route::get('/','AdminRatingController@index')->name('admin.get.list.rating');
	});
	
	// quan ly lien he
	
	Route::group(['prefix' => 'contact'],function (){
	     Route::get('/','AdminContactController@index')->name('admin.get.list.contact');
		Route::get('/action/{name}/{id}','AdminContactController@action')->name('admin.action.contact');
	});
	
	Route::group(['prefix' => 'page-static'],function (){
		Route::get('/','AdminPageStaticController@index')->name('admin.get.list.page_static');
		Route::get('/create','AdminPageStaticController@create')->name('admin.get.create.page_static');
		Route::post('/create','AdminPageStaticController@store');
		Route::get('/update/{id}','AdminPageStaticController@edit')->name('admin.get.edit.page_static');
		Route::post('/update/{id}','AdminPageStaticController@update');
	});
});
