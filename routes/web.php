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

use Illuminate\Support\Facades\Auth;

Route::get('/', 'FrontPageController@index');
Route::get('/gallery-360', 'FrontPageController@gallery')->name('gallery-360');
Route::get('/tourism-service-provider', 'FrontPageController@tsp')->name('tsp');
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
Route::get('/home-stay', 'HomeStayPageController@index')->name('home-stay');
Route::get('/west_bengal_tgcs_2021', 'HomeStayPageController@tgcs')->name('tgcs');
Route::get('/home/incentive_scheme', 'HomeStayPageController@incentive_scheme')->name('incentive_scheme');
Route::get('/home/rtsp_2021', 'HomeStayPageController@rtsp_2021')->name('rtsp_2021');
Route::get('/heritage/list', 'HeritagePageController@index');
Route::get('/mic/list', 'MicPageController@index');
Route::get('/planYourTrip', 'PlanYourTripPageController@index')->name('index');
Route::post('/planYourTrip/save', 'PlanYourTripPageController@onSubmit')->name('tripSave');
Route::get('/planYourTrip/edit/{id}', 'PlanYourTripPageController@tripUpdate')->name('tripUpdate');
Route::get('/most-popular/details', 'MostPopularController@details')->name('most-popular');
Route::get('/contact-us', 'AboutPageController@index')->name('contact');
Route::get('/about/department_personal', 'AboutPageController@department_personal')->name('department');
Route::get('/about/organisation_structure', 'AboutPageController@organization')->name('organization');
Route::get('/about/mission', 'AboutPageController@mission')->name('mission');
Route::get('/about/vission', 'AboutPageController@vission')->name('vission');
Route::get('/home/wbtdcl/organisation', 'wbtdclPageController@organisation')->name('wbtdcl-organisation');
Route::get('/home/wbtdcl/bod', 'wbtdclPageController@bod')->name('board-of-directors');
Route::get('/home/wbtdcl/booking_contact', 'wbtdclPageController@booking_contact')->name('booking_contact');
Route::get('/home/tourism_policy', 'PolicyActPageController@tourism_policy')->name('tourism_policy');
Route::get('/home/tea_tourism_policy', 'PolicyActPageController@tea_tourism_policy')->name('tea_tourism_policy');
Route::get('/home/homestay_tourism_policy', 'PolicyActPageController@homestay_tourism_policy')->name('homestay_tourism_policy');
Route::get('/home/incentive_tourism_policy', 'PolicyActPageController@incentive_tourism_policy')->name('incentive_tourism_policy');
Route::get('/home/paryatan_tourism_policy', 'PolicyActPageController@paryatan_tourism_policy')->name('paryatan_tourism_policy');
Route::get('/home/recognition_tsp_tourism_policy', 'PolicyActPageController@recognition_tsp_tourism_policy')->name('recognition_tsp_tourism_policy');
Route::get('/home/tourist_guide_tourism_policy', 'PolicyActPageController@tourist_guide_tourism_policy')->name('tourist_guide_tourism_policy');
Route::get('/gallery/media_gallery', 'GalleryPageController@media_gallery')->name('media_gallery');
Route::get('/gallery/inauguration', 'GalleryPageController@inauguration')->name('inauguration');
Route::get('/gallery/achievement', 'GalleryPageController@achievement')->name('achievement');
Route::get('/gallery/{slug}', 'GalleryPageController@galleryList')->name('galleryList');
Route::get('/gallery/district/{slug}', 'GalleryPageController@districtGallery')->name('district-gallery');
Route::get('/event/tourism-gallery', 'EventsPageController@tourism_gallery')->name('tourism_gallery');
Route::get('/event/btif', 'EventsPageController@btif')->name('btif');
Route::get('/event/kolkata_christmas_festival', 'EventsPageController@kolkata_christmas_festival')->name('kolkata_christmas_festival');
Route::get('/event/kolkata_connect', 'EventsPageController@kolkata_connect')->name('kolkata_connect');
Route::get('/event/destination_east', 'EventsPageController@destination_east')->name('destination_east');
Route::get('/event/events_gallery', 'EventsPageController@events_gallery')->name('events_gallery');
Route::get('/event/other_events_gallery', 'EventsPageController@other_events_gallery')->name('other_events_gallery');
Route::get('/event/bgbs', 'EventsPageController@bgbs')->name('bgbs');
Route::get('/book/{type}', 'BookPageController@index')->name('book-type');
Route::get('/book/detail/{slug}', 'BookPageController@detail')->name('book-detail');
Route::get('/home/covid_19', 'BookPageController@covid_guidelines')->name('covid_19');
Route::get('/home/currency_converter', 'BookPageController@currency_converter')->name('currency_converter');
Route::get('/home/biswa_bangla_store', 'BookPageController@biswa_bangla_store')->name('biswa_bangla_store');
Route::get('/home/travel_tips', 'BookPageController@travel_tips')->name('travel_tips');
Route::get('/home/transport_services', 'BookPageController@transport_services')->name('transport_services');
Route::get('/home/distance_chart', 'BookPageController@distance_chart')->name('distance_chart');
Route::get('/home/consulates', 'BookPageController@cunsulateslist')->name('consulates');
Route::get('/home/dist_list_tourist_guide', 'TouristGuidePageController@getdistlist')->name('getdistlist');
Route::get('/home/dist_list_tourist_guide/{slug}', 'TouristGuidePageController@distdetail')->name('distdetail');
Route::get('/home/marketing_agents', 'AgentPageController@getagentlist')->name('marketing_agents');
Route::get('/home/private_malls', 'MallsMarketsPageController@getmarketlist')->name('private_malls');
Route::get('/home/experience-bengal', 'ArticlePageController@getarticle')->name('experience-bengal');
Route::get('/home/newsletter', 'NewsletterpageController@getnewsletter')->name('newsletter');
Route::get('/home/sitemap', 'FooterPageController@sitemap')->name('sitemap');
Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\DashboardController@index');
    Route::get('/configure/imageWidthHeight', 'Admin\ConfigController@imageWidthHeight');
    Route::get('/banner/listView', 'Admin\BannerController@listView');
    Route::get('/banner/edit/{id}', 'Admin\BannerController@edit');
    Route::post('/bannerupdate', 'Admin\BannerController@bannerupdate')->name('bannerupdate');
    Route::resource('/banner', 'Admin\BannerController');
    Route::post('/banner/delete', 'Admin\BannerController@delete');
    Route::get('/banner/details/Add', 'Admin\BannerController@detailspageAdd')->name('banner.detail-add');
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
    Route::get('/gallery/edit/{id}', 'Admin\GalleryController@edit');
    Route::post('/galleryupdate', 'Admin\GalleryController@galleryUpdate')->name('galleryupdate');
    Route::get('/gallery/image/add', 'Admin\GalleryController@imageForm')->name('addImageFrm');
    Route::post('/gallery/image/add', 'Admin\GalleryController@addImage')->name('addImage');
    Route::get('/gallery/image/edit/{id}', 'Admin\GalleryController@ImageEdit')->name('updateImagefrm');
    Route::post('/gallery/image/update', 'Admin\GalleryController@ImageUpdate')->name('updateImage');
    Route::get('/gallery/image/list', 'Admin\GalleryController@galleryImagelist')->name('image-list');
    Route::resource('/books','Admin\BookController');
    Route::get('/books/edit/{id}', 'Admin\BookController@edit');
    Route::post('/books/update', 'Admin\BookController@update')->name('update');
    Route::resource('/consulates','Admin\ConsulatesController');
    Route::get('/consulates/edit/{id}','Admin\ConsulatesController@edit');
    Route::post('/consulates/update','Admin\ConsulatesController@update')->name('update');
    Route::resource('/touristguide','Admin\TouristGuideController');
    Route::resource('/marketingagent','Admin\AgentController');
    Route::resource('/mallsnmarket','Admin\MallsMarketsController');
    Route::resource('/article', 'Admin\ArticleController');
    Route::post('/article/delete', 'Admin\ArticleController@delete');
    Route::get('/article/edit/{id}', 'Admin\ArticleController@edit');
    Route::post('/articleupdate', 'Admin\ArticleController@articleUpdate')->name('articleupdate');
    Route::resource('/newsletter', 'Admin\NewsletterController');
    Route::get('/newsletter/edit/{id}', 'Admin\NewsletterController@edit');
    Route::post('/newsletterupdate', 'Admin\NewsletterController@newsletterupdate')->name('newsletterupdate');
    Route::resource('/legends', 'Admin\LegendsController');
    Route::resource('/testimonial', 'Admin\TestimonialController');
    Route::post('/testimonial/delete', 'Admin\TestimonialController@delete');
    Route::any('/configure/fronpage', 'Admin\ConfigController@frontpage');
    Route::get('/image/view', 'Admin\ProductController@viewimage');
    Route::get('/template/getHtml', 'Admin\TemplateController@getHtml');
    // department 
    Route::resource('/department', 'Admin\DepartmentController');
    Route::get('/department/tender/create', 'Admin\DepartmentController@tenderCreate');
    Route::post('/department/tender/create', 'Admin\DepartmentController@tenderSave')->name('tender-create');
    Route::get('/department/rti/create', 'Admin\DepartmentController@rtiCreate');
    Route::post('/department/rti/create', 'Admin\DepartmentController@rtiSave')->name('rti-create');
    Route::get('/department/circular/create', 'Admin\DepartmentController@circularCreate');
    Route::post('/department/circular/create', 'Admin\DepartmentController@circularSave')->name('circular-create');
    Route::get('/department/notice/create', 'Admin\DepartmentController@noticeCreate');
    Route::post('/department/notice/create', 'Admin\DepartmentController@noticeSave')->name('notice-create');

});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
