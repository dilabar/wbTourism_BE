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

Route::get('/', 'FrontPageController@index');
Route::get('/banner/details', 'BannerPageController@details');
Route::get('/product/details', 'ProductPageController@details');
Route::get('/destination/details', 'DestinationPageController@details');
Route::get('/all-destination/details', 'DestinationPageController@allDestination')->name('all-destination');
Route::get('/place/details', 'PlacePageController@details');
Route::get('/product/heritage', 'ProductPageController@heritage');
Route::get('/product/details', 'ProductPageController@details');
Route::get('/tsp', 'TspPageController@index');
Route::get('/hotel/list', 'HotelPageController@index');
Route::get('/hotel/list', 'HotelPageController@index');
Route::get('/wbtdc/list', 'WbTdcPageController@index');
Route::get('/homestay/list', 'HomeStayPageController@index');
Route::get('/heritage/list', 'HeritagePageController@index');
Route::get('/mic/list', 'MicPageController@index');
Route::get('/planYourTrip', 'PlanYourTripPageController@index');
Route::get('/most-popular/details', 'MostPopularController@details')->name('most-popular');
Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\DashboardController@index');
    Route::get('/configure/imageWidthHeight', 'Admin\ConfigController@imageWidthHeight');
    Route::get('/banner/listView', 'Admin\BannerController@listView');
    Route::get('/banner/edit/{id}', 'Admin\BannerController@edit');
    Route::post('/bannerupdate', 'Admin\BannerController@bannerupdate')->name('bannerupdate');
    Route::resource('/banner', 'Admin\BannerController');
    Route::post('/banner/delete', 'Admin\BannerController@delete');
    Route::get('/banner/details/Add', 'Admin\BannerController@detailspageAdd');
    Route::get('/banner/details/Edit/{id}', 'Admin\BannerController@detailspageEdit');
    Route::post('/banner/details/insert', 'Admin\BannerController@detailspageAddPost')->name('bannerdetaisladd');
    Route::post('/banner/details/update', 'Admin\BannerController@detailspageUpdate')->name('bannerdetaislupdate');
    Route::resource('/product', 'Admin\ProductController');
    Route::get('/product/details/Add', 'Admin\ProductController@productAdd');
    Route::post('/product/details/insert', 'Admin\ProductController@storeProduct')->name('addProductDetail');
    Route::post('/product/delete', 'Admin\ProductController@delete');
    Route::resource('/destination', 'Admin\DestinationController');
    Route::post('/destination/place/add', 'Admin\DestinationController@storePlace')->name('addplace');
    Route::get('/destination/get/getsubcat', 'Admin\DestinationController@getsubcat')->name('getsubcat');
    Route::post('/destination/delete', 'Admin\DestinationController@delete');
    Route::get('/destination/details/Add', 'Admin\DestinationController@placeAdd');
    Route::resource('/festival', 'Admin\FestivalController');
    Route::post('/festival/delete', 'Admin\FestivalController@delete');
    Route::resource('/event', 'Admin\EventController');
    Route::post('/event/delete', 'Admin\EventController@delete');
    Route::resource('/item', 'Admin\ItemController');
    Route::post('/item/delete', 'Admin\ItemController@delete');
    Route::resource('/gallery', 'Admin\GalleryController');
    Route::post('/gallery/delete', 'Admin\GalleryController@delete');
    Route::resource('/testimonial', 'Admin\TestimonialController');
    Route::post('/testimonial/delete', 'Admin\TestimonialController@delete');
    Route::any('/configure/fronpage', 'Admin\ConfigController@frontpage');
    Route::get('/image/view', 'Admin\ProductController@viewimage');
    Route::get('/template/getHtml', 'Admin\TemplateController@getHtml');

});
Route::resource('/books','BookController');
