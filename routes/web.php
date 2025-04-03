<?php
/*
|--------------------------------------------------------------------------
| System Routes
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

/*
|--------------------------------------------------------------------------
| Administrator Routes
|--------------------------------------------------------------------------
*/
Route::get('sitemap.xml', 'HomeController@sitemap')->name('sitemapxml');

Route::get('/clear-cache', function() {
     $exitCode = Artisan::call('cache:clear');
    $exitCode2 = Artisan::call('config:cache');

    dd($exitCode, $exitCode2);
});

Route::get('/robots.txt', function () {
    $res = "User-agent: *\n"
          ."Disallow:\n"
          ."Sitemap: https://www.jacarandacar.com/sitemap.xml";

    return response($res, 200)
           ->header('Content-Type', 'text/plain');
});

Route::group(['middleware' => 'admin'], function(){

    // Admin routes
    Route::get('/admin/logout', 'Admin\AdminLoginController@logout')->name('admin_logout');
    Route::get('/admin/dashboard','Admin\AdminLoginController@dashboard')->name('admin_dashboard');
    Route::get('/admin/my_account','Admin\AdminController@index')->name('admin_my_account');
    Route::put('/admin/my_account/update/{id}','Admin\AdminController@update')->name('admin_my_account_update');

    // Additional Blog Routes
    Route::post('/admin/blog/activate/{id}', 'Admin\AdminBlogController@activate');
    Route::post('/admin/blog/deactivate/{id}', 'Admin\AdminBlogController@deactivate');
    Route::get('/admin/blog/autocomplete/', 'Admin\AdminBlogController@autocomplete');
    Route::post('/admin/blog/search/', 'Admin\AdminBlogController@search')->name('admin_blog_search');
    Route::post('/admin/blog/massdestroy', 'Admin\AdminBlogController@massDestroy');
    Route::post('/admin/blog/deleteImage/{id}', 'Admin\AdminBlogController@deleteFeatured');

    // Additional Page Routes
    Route::post('/admin/page/activate/{id}', 'Admin\AdminPageController@activate');
    Route::post('/admin/page/deactivate/{id}', 'Admin\AdminPageController@deactivate');
    Route::get('/admin/page/autocomplete/', 'Admin\AdminPageController@autocomplete');
    Route::post('/admin/page/search/', 'Admin\AdminPageController@search')->name('admin_page_search');
    Route::post('/admin/page/massdestroy', 'Admin\AdminPageController@massDestroy');

    Route::post('/admin/faq/massdestroy', 'Admin\AdminFaqController@massDestroy');

    // Additional Car Routes
    Route::post('/admin/car/activate/{id}', 'Admin\AdminCarController@activate');
    Route::post('/admin/car/deactivate/{id}', 'Admin\AdminCarController@deactivate');
    Route::post('/admin/car/makefeatured/{id}', 'Admin\AdminCarController@makeFeatured');
    Route::post('/admin/car/makedefault/{id}', 'Admin\AdminCarController@makeDefault');
    Route::get('/admin/car/autocomplete/', 'Admin\AdminCarController@autocomplete');
    Route::post('/admin/car/search/', 'Admin\AdminCarController@search')->name('admin_car_search');
    Route::post('/admin/car/massdestroy', 'Admin\AdminCarController@massDestroy');
    Route::post('/admin/car/updateDates/', 'Admin\AdminCarController@updateDates')->name('admin_car_update_dates');

    // Additional Taxonomy Category Routes
    Route::post('/admin/taxonomy/category/search/', 'Admin\AdminCategoryController@search')->name('admin_taxonomy_category_search');
    Route::get('/admin/taxonomy/category/autocomplete/', 'Admin\AdminCategoryController@autocomplete');
    Route::post('/admin/taxonomy/category/massdestroy', 'Admin\AdminCategoryController@massDestroy');
    Route::post('/admin/taxonomy/category/deleteImage/{id}', 'Admin\AdminCategoryController@deleteFeatured');

    // Additional Taxonomy Carmake Routes
    Route::post('/admin/taxonomy/carmake/search/', 'Admin\AdminCarmakeController@search')->name('admin_taxonomy_carmake_search');
    Route::get('/admin/taxonomy/carmake/autocomplete/', 'Admin\AdminCarmakeController@autocomplete');
    Route::post('/admin/taxonomy/carmake/massdestroy', 'Admin\AdminCarmakeController@massDestroy');
    Route::post('/admin/taxonomy/carmake/deleteImage/{id}', 'Admin\AdminCarmakeController@deleteFeatured');

    // Additional Taxonomy Carmodel Routes
    Route::post('/admin/taxonomy/carmodel/search/', 'Admin\AdminCarmodelController@search')->name('admin_taxonomy_carmodel_search');
    Route::get('/admin/taxonomy/carmodel/autocomplete/', 'Admin\AdminCarmodelController@autocomplete');
    Route::post('/admin/taxonomy/carmodel/massdestroy', 'Admin\AdminCarmodelController@massDestroy');
    Route::post('/admin/taxonomy/carmodel/deleteImage/{id}', 'Admin\AdminCarmodelController@deleteFeatured');
    Route::post('/get_carmodels', 'CarController@get_carmodels')->name('get_carmodels');

    // Additional Car Location Routes
    Route::post('/admin/taxonomy/location/search/', 'Admin\AdminLocationController@search')->name('admin_taxonomy_location_search');
    Route::get('/admin/taxonomy/location/autocomplete/', 'Admin\AdminLocationController@autocomplete');
    Route::post('/admin/taxonomy/location/massdestroy', 'Admin\AdminLocationController@massDestroy');
    Route::post('/admin/taxonomy/location/deleteImage/{id}', 'Admin\AdminLocationController@deleteFeatured');
    Route::post('/admin/taxonomy/location/deleteHomeImage/{id}', 'Admin\AdminLocationController@deleteHomeImage');

    // Site Settings Controller Routes
    Route::get('/admin/settings/site_settings', 'Admin\AdminSiteSettingsController@index')->name('admin_site_settings');
    Route::post('admin/settings/site_settings/insert', 'Admin\AdminSiteSettingsController@insert')->name('admin_site_settings_update');

    // Site Settings Controller Routes
    Route::get('/admin/settings/style_settings', 'Admin\AdminStyleSettingsController@index')->name('admin_style_settings');
    Route::post('admin/settings/style_settings/insert', 'Admin\AdminStyleSettingsController@insert')->name('admin_style_settings_update');

    // Car Settings Controller Routes
    Route::get('/admin/settings/car_settings', 'Admin\AdminCarSettingsController@index')->name('admin_car_settings');
    Route::post('admin/settings/car_settings/insert', 'Admin\AdminCarSettingsController@insert')->name('admin_car_settings_update');

    // User Settings Controller Routes
    Route::get('/admin/settings/user_settings', 'Admin\AdminUserSettingsController@index')->name('admin_user_settings');
    Route::post('admin/settings/user_settings/insert', 'Admin\AdminUserSettingsController@insert')->name('admin_user_settings_update');

    // Owner Settings Controller Routes
    Route::get('/admin/settings/owner_settings', 'Admin\AdminOwnerSettingsController@index')->name('admin_owner_settings');
    Route::post('admin/settings/owner_settings/insert', 'Admin\AdminOwnerSettingsController@insert')->name('admin_owner_settings_update');

    // Purchase Controller Routes
    Route::get('/admin/owner/purchase', 'Admin\AdminPurchaseController@index')->name('admin_owner_purchase');

    // Activity Controller Routes
    Route::get('/admin/owner/activity', 'Admin\AdminActivityController@index')->name('admin_owner_activity');

    // Activity Controller Routes
    Route::get('/admin/request', 'Admin\AdminRequestController@index')->name('admin_requests');

    // Payment Settings Controller Routes
    Route::get('/admin/settings/payment_settings', 'Admin\AdminPaymentSettingsController@index')->name('admin_payment_settings');
    Route::post('admin/settings/payment_settings/insert', 'Admin\AdminPaymentSettingsController@insert')->name('admin_payment_settings_update');

    // Design Settings Controller Routes
    Route::get('/admin/settings/design_settings', 'Admin\AdminDesignSettingsController@index')->name('admin_design_settings');
    Route::post('admin/settings/design_settings/insert', 'Admin\AdminDesignSettingsController@insert')->name('admin_design_settings_update');

    // Language Settings Controller Routes
    Route::get('/admin/settings/language', 'Admin\AdminLanguageController@index')->name('admin_language_settings');
    Route::post('/admin/settings/language/update', 'Admin\AdminLanguageController@update')->name('admin_language_update');
    Route::post('/admin/settings/language/makeDefault/{id}', 'Admin\AdminLanguageController@makeDefault');
    Route::post('/admin/settings/language/destroy/{id}', 'Admin\AdminLanguageController@destroy');

    // Car Features Controller Routes
    Route::get('/admin/taxonomy/feature', 'Admin\AdminFeatureController@index')->name('admin_taxonomy_feature');
    Route::get('/admin/taxonomy/feature/getFeature/{id}', 'Admin\AdminFeatureController@getFeature');
    Route::post('/admin/taxonomy/feature/update', 'Admin\AdminFeatureController@update')->name('admin_taxonomy_feature_update');
    Route::post('/admin/taxonomy/feature/store', 'Admin\AdminFeatureController@store')->name('admin_taxonomy_feature_store');
    Route::post('/admin/taxonomy/feature/destroy/{id}', 'Admin\AdminFeatureController@destroy');

    // Car Highlights Controller Routes
    Route::get('/admin/taxonomy/highlight', 'Admin\AdminHighlightController@index')->name('admin_taxonomy_highlight');
    Route::get('/admin/taxonomy/highlight/getHighlight/{id}', 'Admin\AdminHighlightController@getHighlight');
    Route::post('/admin/taxonomy/highlight/update', 'Admin\AdminHighlightController@update')->name('admin_taxonomy_highlight_update');
    Route::post('/admin/taxonomy/highlight/store', 'Admin\AdminHighlightController@store')->name('admin_taxonomy_highlight_store');
    Route::post('/admin/taxonomy/highlight/destroy/{id}', 'Admin\AdminHighlightController@destroy');

    // Car Extra Services Controller Routes
    Route::get('/admin/taxonomy/extraservice', 'Admin\AdminExtraServiceController@index')->name('admin_taxonomy_extraservice');
    Route::get('/admin/taxonomy/extraservice/getExtraService/{id}', 'Admin\AdminExtraServiceController@getExtraService');
    Route::post('/admin/taxonomy/extraservice/update', 'Admin\AdminExtraServiceController@update')->name('admin_taxonomy_extraservice_update');
    Route::post('/admin/taxonomy/extraservice/store', 'Admin\AdminExtraServiceController@store')->name('admin_taxonomy_extraservice_store');
    Route::post('/admin/taxonomy/extraservice/destroy/{id}', 'Admin\AdminExtraServiceController@destroy');

    // Car Services Controller Routes
    Route::get('/admin/taxonomy/service', 'Admin\AdminServiceController@index')->name('admin_taxonomy_service');
    Route::get('/admin/taxonomy/service/getService/{id}', 'Admin\AdminServiceController@getService');
    Route::put('/admin/taxonomy/service/update', 'Admin\AdminServiceController@update')->name('admin_taxonomy_service_update');
    Route::put('/admin/taxonomy/service/store', 'Admin\AdminServiceController@store')->name('admin_taxonomy_service_store');
    Route::post('/admin/taxonomy/service/destroy/{id}', 'Admin\AdminServiceController@destroy');

    // Currency Controller Routes
    Route::get('/admin/setting/currency', 'Admin\AdminCurrencyController@index')->name('admin_currency');
    Route::get('/admin/setting/currency/getCurrency/{id}', 'Admin\AdminCurrencyController@getCurrency');
    Route::post('/admin/setting/currency/store', 'Admin\AdminCurrencyController@store')->name('admin_currency_store');
    Route::post('/admin/setting/currency/destroy/{id}', 'Admin\AdminCurrencyController@destroy');

    // Car Review Controller Routes
    Route::get('/admin/review', 'Admin\AdminReviewController@index')->name('admin_review');
    Route::post('/admin/review/complete/{id}', 'Admin\AdminReviewController@complete');
    Route::post('/admin/review/dismiss/{id}', 'Admin\AdminReviewController@dismiss');
    Route::post('/admin/review/delete/{id}', 'Admin\AdminReviewController@delete');
    Route::post('/admin/review/getReview/{id}', 'Admin\AdminReviewController@getReview');

    // Users Controller Rutes
    Route::get('/admin/user', 'Admin\AdminUserController@index')->name('admin_users');
    Route::get('/admin/user/autocomplete/', 'Admin\AdminUserController@autocomplete');
    Route::get('/admin/user/userinfo/', 'Admin\AdminUserController@userinfo');
    Route::post('/admin/user/search/', 'Admin\AdminUserController@search')->name('admin_user_search');
    Route::post('/admin/user/destroy/{id}', 'Admin\AdminUserController@destroy');
    Route::post('/admin/user/upgrade/{id}', 'Admin\AdminUserController@upgrade');
    Route::post('/admin/user/massdestroy', 'Admin\AdminUserController@massDestroy');
    Route::post('/admin/user/update', 'Admin\AdminUserController@update')->name('admin_user_update');
    Route::post('/admin/user/activate/{id}', 'Admin\AdminUserController@activate');
    Route::post('/admin/user/deactivate/{id}', 'Admin\AdminUserController@deactivate');

    // User Requests Controller Routes
    Route::get('/admin/user/request', 'Admin\AdminUserRequestController@index')->name('admin_users_request');
    Route::post('/admin/user/request/complete/{id}', 'Admin\AdminUserRequestController@complete');
    Route::post('/admin/user/request/dismiss/{id}', 'Admin\AdminUserRequestController@dismiss');
    Route::post('/admin/user/request/delete/{id}', 'Admin\AdminUserRequestController@delete');

    // User Withdrawal Controller Routes
    Route::get('/admin/owner/withdrawal', 'Admin\AdminWithdrawalController@index')->name('admin_user_withdrawals');
    Route::post('/admin/owner/withdrawal/complete/{id}', 'Admin\AdminWithdrawalController@complete');
    Route::post('/admin/owner/withdrawal/dismiss/{id}', 'Admin\AdminWithdrawalController@dismiss');
    Route::post('/admin/owner/withdrawal/delete/{id}', 'Admin\AdminWithdrawalController@delete');
    Route::post('/admin/owner/withdrawal/details/{id}', 'Admin\AdminWithdrawalController@userInfo');

    // Bookings Controller Routes
    Route::get('/admin/booking', 'Admin\AdminBookingController@index')->name('admin_booking');
    Route::post('/admin/booking/user_details/{id}', 'Admin\AdminBookingController@userInfo');
    Route::post('/admin/booking/delete/{id}', 'Admin\AdminBookingController@delete');
    Route::get('/admin/booking/edit/{id}', 'Admin\AdminBookingController@edit')->name('edit_booking');
    Route::patch('/admin/booking/update/{id}', 'Admin\AdminBookingController@update')->name('update_booking');
    Route::post('/admin/booking/reject/{id}', 'Admin\AdminBookingController@reject');

    // Message Controller Routes
    Route::get('/admin/message', 'Admin\AdminMessageController@index')->name('admin_message');
    Route::get('/admin/message/{id}', 'Admin\AdminMessageController@thread')->name('admin_message_list');
    Route::post('/admin/message/reply/{id}', 'Admin\AdminMessageController@reply')->name('admin_message_reply');
    Route::post('/admin/message/delete/{id}', 'Admin\AdminMessageController@delete');
    Route::post('/admin/message/close/{id}', 'Admin\AdminMessageController@close');

    // Payment Controller Routes
    Route::get('/admin/payment', 'Admin\AdminPaymentController@index')->name('admin_payment');
    Route::post('/admin/payment/details/{id}', 'Admin\AdminPaymentController@details');

    // Translator Controller Routers
    Route::get('/admin/settings/translator', 'Admin\AdminTranslatorController@index')->name('admin_translator');
    Route::post('/admin/settings/translator/getString/{key}', 'Admin\AdminTranslatorController@getString');
    Route::post('/admin/settings/translator/updateString', 'Admin\AdminTranslatorController@updateString');
    Route::post('/admin/settings/translator/createString', 'Admin\AdminTranslatorController@createString')->name('admin_create_string');
    Route::get('/admin/settings/translator/export', 'Admin\AdminLanguageController@export')->name('strings_export');
    Route::post('/admin/settings/translator/import', 'Admin\AdminLanguageController@import')->name('strings_import');

    // Availability Dates Controller Routes
    Route::get('/old-admin/car/date/{id}', 'Admin\AdminCarDateController@index')->name('old_admin_car_date');
    Route::get('/admin/car/date/{id}',          'Admin\AdminCarDateController@display_prices_calendar')->name('admin_car_date');
    Route::post('/admin/car/date/{id}',         'Admin\AdminCarDateController@prices_calendar_store')->name('store_prices_car');

    // Resource Admin Controllers
    Route::resource('/admin/blog', 'Admin\AdminBlogController', ['as' => 'admin']);
    Route::resource('/admin/page', 'Admin\AdminPageController', ['as' => 'admin']);
    Route::resource('/admin/faq', 'Admin\AdminFaqController', ['as' => 'admin']);
    Route::resource('/admin/taxonomy/category', 'Admin\AdminCategoryController', ['as' => 'admin.taxonomy']);
    Route::resource('/admin/taxonomy/carmake', 'Admin\AdminCarmakeController', ['as' => 'admin.taxonomy']);
    Route::resource('/admin/taxonomy/carmodel', 'Admin\AdminCarmodelController', ['as' => 'admin.taxonomy']);
    Route::resource('/admin/taxonomy/location', 'Admin\AdminLocationController', ['as' => 'admin.taxonomy']);
    Route::resource('/admin/car', 'Admin\AdminCarController', ['as' => 'admin']);

});

Route::get('/admin', 'Admin\AdminLoginController@index')->name('admin_login');
Route::get('/admin/reset', 'Admin\AdminLoginController@resetPassword')->name('admin_reset');

// Image Handler
Route::get('/image_handler', 'ImageHandler@index');
Route::post('/image_handler/upload', 'ImageHandler@store')->name('image_handler_upload');
Route::post('/image_handler/delete', 'ImageHandler@delete')->name('image_handler_delete');
Route::post('/image_handler/deleteBase', 'ImageHandler@deleteBase')->name('image_handler_deleteBase');

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

// Route::get('/', [HomeController::class,'index'])->name('home');

Route::group(['middleware' => 'user'], function(){

    // Only for users
    Route::get('/my-account', 'UserController@index')->name('my_account');
    Route::post('/user-update', 'UserController@update')->name('user_update');
    Route::post('/user-request', 'UserController@request');

    // Message Controller Routes
    Route::get('/message', 'MessageController@index')->name('message');
    Route::get('/message/{id}', 'MessageController@thread')->name('message_list');
    Route::post('/message/reply/{id}', 'MessageController@reply')->name('message_reply');
    Route::post('/message/post', 'MessageController@post')->name('message_owner');

});

// $locale = Request::segment(1);

// if($locale == 'rental'){
//     app()->setLocale('en');
// }elseif($locale == 'es'){
//     app()->setLocale('es');
// }elseif($locale == 'noleggio'){
//     app()->setLocale('it');
// }elseif($locale == 'wynajem'){
//     app()->setLocale('pl');
// }elseif($locale == 'verhuur') {
//     app()->setLocale('nl');
// }elseif($locale == 'aluguel') {
//     app()->setLocale('pt');
// } else {
//     app()->setLocale('fr');
//     $locale = '';
// }
Route::group(
    [
    //   'prefix' => $locale,
    //   'where' => ['locale' => 'rental'],
    //   'middleware' => 'language_middleware'
    ], function() {


    // if($locale && $locale == 'rental'){
    //     Route::get('car-rental-medina', 'HomeController@loc_medina')->name('location-de-voiture-medina_en');
    //     Route::get('car-rental-gueliz', 'HomeController@loc_gueliz')->name('location-de-voiture-gueliz_en');
    //     Route::get('car-rental-tanger', 'HomeController@loc_tanger')->name('location-de-voiture-tanger_en');
    //     Route::get('car-rental-rabat', 'HomeController@loc_rabat')->name('location-de-voiture-rabat_en');
    //     Route::get('car-rental-casablanca', 'HomeController@loc_casablanca')->name('location-de-voiture-casablanca_en');
    //     Route::get('car-rental-agadir', 'HomeController@loc_agadir')->name('location-de-voiture-agadir_en');
    //     Route::get('car-rental-mohammedia', 'HomeController@loc_mohammedia')->name('location-de-voiture-mohammedia_en');
    //     Route::get('car-rental-essaouira', 'HomeController@loc_essaouira')->name('location-de-voiture-essaouira_en');
    //     Route::get('car-rental-fes', 'HomeController@loc_fes')->name('location-de-voiture-fes_en');
    //     Route::get('car-rental-in-marrakech', 'HomeController@loc_marrakech')->name('car-rental-in-marrakech');
    //     Route::get('cheap-car-hire-marrakech', 'HomeController@cher')->name('cheap-car-hire-marrakech');
    //     Route::get('4-x-4-hire-marrakech', 'HomeController@qat_qat')->name('4-x-4-hire-marrakech');
    //     Route::get('car-rental-marrakech-airport', 'HomeController@airport')->name('car-rental-marrakech-airport');
    //     Route::get('car-rental-marrakech-without-deposit', 'HomeController@caution')->name('car-rental-marrakech-without-deposit');
    //     Route::get('car-rental-marrakech-manual-automatic', 'HomeController@man_auto')->name('car-rental-marrakech-manual-automatic');
    //     Route::get('automatic-car-rental-marrakech', 'HomeController@loc_automatic')->name('location-voiture-automatique-marrakech_en');
    //     Route::get('manual-car-rental-marrakech', 'HomeController@loc_manuel')->name('location-voiture-manuelle-marrakech_en');
    // }elseif($locale && $locale == 'es'){
    //     Route::get('alquiler-de-coches-medina', 'HomeController@loc_medina')->name('location-de-voiture-medina_es');
    //     Route::get('alquiler-de-coches-gueliz', 'HomeController@loc_gueliz')->name('location-de-voiture-gueliz_es');
    //     Route::get('alquiler-de-coches-tanger', 'HomeController@loc_tanger')->name('location-de-voiture-tanger_es');
    //     Route::get('alquiler-de-coches-rabat', 'HomeController@loc_rabat')->name('location-de-voiture-rabat_es');
    //     Route::get('alquiler-de-coches-casablanca', 'HomeController@loc_casablanca')->name('location-de-voiture-casablanca_es');
    //     Route::get('alquiler-de-coches-agadir', 'HomeController@loc_agadir')->name('location-de-voiture-agadir_es');
    //     Route::get('alquiler-de-coches-mohammedia', 'HomeController@loc_mohammedia')->name('location-de-voiture-mohammedia_es');
    //     Route::get('alquiler-de-coches-essaouira', 'HomeController@loc_essaouira')->name('location-de-voiture-essaouira_es');
    //     Route::get('alquiler-de-coches-fes', 'HomeController@loc_fes')->name('location-de-voiture-fes_es');
    //     Route::get('alquiler-de-coches-en-marrakech', 'HomeController@loc_marrakech')->name('car-rental-in-marrakech-es');
    //     Route::get('alquiler-coches-marrakech-barato', 'HomeController@cher')->name('alquiler-de-coches-marrakech-barato');
    //     Route::get('alquiler-4-x-4-marrakech', 'HomeController@qat_qat')->name('alquiler-4-x-4-marrakech');
    //     Route::get('alquiler-coche-marrakech-aeropuerto', 'HomeController@airport')->name('alquiler-coche-marrakech-aeropuerto');
    //     Route::get('alquiler-coche-marrakech-sin-deposito', 'HomeController@caution')->name('alquiler-coche-marrakech-sin-deposito');
    //     Route::get('alquiler-coche-marrakech-manual-automático', 'HomeController@man_auto')->name('alquiler-coche-marrakech-manual-automático');
    //     Route::get('alquiler-coches-marrakech', 'CarController@getParcAuto')->name('parc_auto_es');
    //     Route::get('alquiler-de-coches-automático-marrakech', 'HomeController@loc_automatic')->name('location-voiture-automatique-marrakech_es');
    //     Route::get('manual-alquiler-de-coches-marrakech', 'HomeController@loc_manuel')->name('location-voiture-manuelle-marrakech_es');
    // }elseif($locale && $locale == 'noleggio'){
    //     Route::get('noleggio-auto-medina', 'HomeController@loc_medina')->name('location-de-voiture-medina_it');
    //     Route::get('noleggio-auto-gueliz', 'HomeController@loc_gueliz')->name('location-de-voiture-gueliz_it');
    //     Route::get('noleggio-auto-tanger', 'HomeController@loc_tanger')->name('location-de-voiture-tanger_it');
    //     Route::get('noleggio-auto-rabat', 'HomeController@loc_rabat')->name('location-de-voiture-rabat_it');
    //     Route::get('noleggio-auto-casablanca', 'HomeController@loc_casablanca')->name('location-de-voiture-casablanca_it');
    //     Route::get('noleggio-auto-agadir', 'HomeController@loc_agadir')->name('location-de-voiture-agadir_it');
    //     Route::get('noleggio-auto-mohammedia', 'HomeController@loc_mohammedia')->name('location-de-voiture-mohammedia_it');
    //     Route::get('noleggio-auto-essaouira', 'HomeController@loc_essaouira')->name('location-de-voiture-essaouira_it');
    //     Route::get('noleggio-auto-fes', 'HomeController@loc_fes')->name('location-de-voiture-fes_it');
    //     Route::get('noleggio-auto-a-marrakech', 'HomeController@loc_marrakech')->name('car-rental-in-marrakech-it');
    //     Route::get('autonoleggio-marrakech', 'CarController@getParcAuto')->name('parc_auto_it');
    //     Route::get('condizioni-generali', 'HomeController@generalConditions')->name('generalconditions_it');
    //     Route::get('contattaci', 'HomeController@contact')->name('contact_it');
    //     Route::get('noleggio-auto-marrakech-economico', 'HomeController@cher')->name('location-de-voiture-marrakech-pas-cher_it');
    //     Route::get('autonoleggio-marrakech-aeroporto', 'HomeController@airport')->name('location-voiture-marrakech-aeroport_it');
    //     Route::get('noleggio-auto-marrakech-senza-deposito', 'HomeController@caution')->name('location-voiture-marrakech-sans-caution_it');
    //     Route::get('autonoleggio-marrakech-manuale-automatico', 'HomeController@man_auto')->name('location-voiture-marrakech-manuelle-automatique_it');
    //     Route::get('noleggio-4x4-marrakech', 'HomeController@qat_qat')->name('location-4-x-4-marrakech_it');
    //     Route::get('noleggio-auto-automatico-marrakech', 'HomeController@loc_automatic')->name('location-voiture-automatique-marrakech_it');
    //     Route::get('noleggio-auto-manuale-marrakech', 'HomeController@loc_manuel')->name('location-voiture-manuelle-marrakech_it');
    // } elseif($locale && $locale == 'wynajem'){
    //     Route::get('wypożyczalnia-samochodów-marrakesz', 'CarController@getParcAuto')->name('parc_auto_pl');
    //     Route::get('ogólne-warunki', 'HomeController@generalConditions')->name('generalconditions_pl');
    //     Route::get('pytania-i-odpowiedzi', 'HomeController@faq')->name('faq_pl');
    //     Route::get('kontakt', 'HomeController@contact')->name('contact_pl');
    //     Route::get('wynajem-samochodów-w-marrakeszu-tanio', 'HomeController@cher')->name('location-de-voiture-marrakech-pas-cher_pl');
    //     Route::get('wynajem-samochodów-w-marrakeszu', 'HomeController@loc_marrakech')->name('location-de-voiture-a-marrakech_pl');
    //     Route::get('wynajem-samochodu-lotnisko-marrakesz', 'HomeController@airport')->name('location-voiture-marrakech-aeroport_pl');
    //     Route::get('wynajem-samochodów-w-marrakeszu-bez-kaucji', 'HomeController@caution')->name('location-voiture-marrakech-sans-caution_pl');
    //     Route::get('wynajem-samochodów-automatycznych-w-marrakeszu', 'HomeController@loc_automatic')->name('location-voiture-automatique-marrakech_pl');
    //     Route::get('wynajem-4-x-4-marrakesz', 'HomeController@qat_qat')->name('location-4-x-4-marrakech_pl');
    //     Route::get('wynajem-samochodów-manualnych-w-marrakeszu', 'HomeController@loc_manuel')->name('location-voiture-manuelle-marrakech_pl');
    //     // Route::get('autonoleggio-marrakech-manuale-automatico', 'HomeController@man_auto')->name('location-voiture-marrakech-manuelle-automatique_it');
    //     Route::get('wynajem-samochodów-medina', 'HomeController@loc_medina')->name('location-de-voiture-medina_pl');
    //     Route::get('wynajem-samochodów-gueliz', 'HomeController@loc_gueliz')->name('location-de-voiture-gueliz_pl');
    //     Route::get('wynajem-samochodów-tanger', 'HomeController@loc_tanger')->name('location-de-voiture-tanger_pl');
    //     Route::get('wynajem-samochodówrw-rabat', 'HomeController@loc_rabat')->name('location-de-voiture-rabat_pl');
    //     Route::get('wynajem-samochodów-casablanca', 'HomeController@loc_casablanca')->name('location-de-voiture-casablanca_pl');
    //     Route::get('wynajem-samochodów-agadir', 'HomeController@loc_agadir')->name('location-de-voiture-agadir_pl');
    //     Route::get('wynajem-samochodów-mohammedia', 'HomeController@loc_mohammedia')->name('location-de-voiture-mohammedia_pl');
    //     Route::get('wynajem-samochodów-essaouira', 'HomeController@loc_essaouira')->name('location-de-voiture-essaouira_pl');
    //     Route::get('wynajem-samochodów-fes', 'HomeController@loc_fes')->name('location-de-voiture-fes_pl');

    // } elseif($locale && $locale == 'verhuur') {
    //     Route::get('autoverhuur-marrakech', 'CarController@getParcAuto')->name('parc_auto_nl');
    //     Route::get('algemene-voorwaarden', 'HomeController@generalConditions')->name('generalconditions_nl');
    //     Route::get('veelgestelde-vragen', 'HomeController@faq')->name('faq_nl');
    //     Route::get('contact', 'HomeController@contact')->name('contact_nl');
    //     Route::get('autoverhuur-marrakech-goedkoop', 'HomeController@cher')->name('location-de-voiture-marrakech-pas-cher_nl');
    //     Route::get('autoverhuur-in-marrakech', 'HomeController@loc_marrakech')->name('location-de-voiture-a-marrakech_nl');
    //     Route::get('autoverhuur-marrakech-luchthaven', 'HomeController@airport')->name('location-voiture-marrakech-aeroport_nl');
    //     Route::get('autoverhuur-marrakech-zonder-borg', 'HomeController@caution')->name('location-voiture-marrakech-sans-caution_nl');
    //     Route::get('automatische-autoverhuur-marrakech', 'HomeController@loc_automatic')->name('location-voiture-automatique-marrakech_nl');
    //     Route::get('verhuur-4-x-4-marrakech', 'HomeController@qat_qat')->name('location-4-x-4-marrakech_nl');
    //     Route::get('handgeschakelde-autoverhuur-marrakech', 'HomeController@loc_manuel')->name('location-voiture-manuelle-marrakech_nl');
    //     // Route::get('autonoleggio-marrakech-manuale-automatico', 'HomeController@man_auto')->name('location-voiture-marrakech-manuelle-automatique_it');
    //     Route::get('autoverhuur-medina', 'HomeController@loc_medina')->name('location-de-voiture-medina_nl');
    //     Route::get('autoverhuur-gueliz', 'HomeController@loc_gueliz')->name('location-de-voiture-gueliz_nl');
    //     Route::get('autoverhuur-tanger', 'HomeController@loc_tanger')->name('location-de-voiture-tanger_nl');
    //     Route::get('autoverhuur-rabat', 'HomeController@loc_rabat')->name('location-de-voiture-rabat_nl');
    //     Route::get('autoverhuur-casablanca', 'HomeController@loc_casablanca')->name('location-de-voiture-casablanca_nl');
    //     Route::get('autoverhuur-agadir', 'HomeController@loc_agadir')->name('location-de-voiture-agadir_nl');
    //     Route::get('autoverhuur-mohammedia', 'HomeController@loc_mohammedia')->name('location-de-voiture-mohammedia_nl');
    //     Route::get('autoverhuur-essaouira', 'HomeController@loc_essaouira')->name('location-de-voiture-essaouira_nl');
    //     Route::get('autoverhuur-fez', 'HomeController@loc_fes')->name('location-de-voiture-fes_nl');
    // } elseif($locale && $locale == 'aluguel') {
    //     Route::get('aluguel-de-carros-marrakech', 'CarController@getParcAuto')->name('parc_auto_pt');
    //     Route::get('condições-gerais', 'HomeController@generalConditions')->name('generalconditions_pt');
    //     Route::get('perguntas-frequentesn', 'HomeController@faq')->name('faq_pt');
    //     Route::get('contato', 'HomeController@contact')->name('contact_pt');

    //     Route::get('aluguel-carros-barato-marrakech', 'HomeController@cher')->name('location-de-voiture-marrakech-pas-cher_pt');
    //     Route::get('aluguel-carros-marrakech', 'HomeController@loc_marrakech')->name('location-de-voiture-a-marrakech_pt');
    //     Route::get('aluguel-carros-no-aeroporto-marrakech', 'HomeController@airport')->name('location-voiture-marrakech-aeroport_pt');
    //     Route::get('aluguel-carros-marrakech-sem-depósito', 'HomeController@caution')->name('location-voiture-marrakech-sans-caution_pt');
    //     Route::get('aluguel-carros-automáticos-marrakech', 'HomeController@loc_automatic')->name('location-voiture-automatique-marrakech_pt');
    //     Route::get('aluguel-4x4-arrakech', 'HomeController@qat_qat')->name('location-4-x-4-marrakech_pt');
    //     Route::get('aluguel-carros-manuais-marrakech', 'HomeController@loc_manuel')->name('location-voiture-manuelle-marrakech_pt');
    //     Route::get('aluguel-de-carros-na-medina', 'HomeController@loc_medina')->name('location-de-voiture-medina_pt');
    //     Route::get('aluguel-carros-gueliz', 'HomeController@loc_gueliz')->name('location-de-voiture-gueliz_pt');
    //     Route::get('aluguel-carros-tanger', 'HomeController@loc_tanger')->name('location-de-voiture-tanger_pt');
    //     Route::get('aluguel-carros-rabat', 'HomeController@loc_rabat')->name('location-de-voiture-rabat_pt');
    //     Route::get('aluguel-carros-casablanca', 'HomeController@loc_casablanca')->name('location-de-voiture-casablanca_pt');
    //     Route::get('aluguel-carros-agadir', 'HomeController@loc_agadir')->name('location-de-voiture-agadir_pt');
    //     Route::get('aluguel-carros-mohammedia', 'HomeController@loc_mohammedia')->name('location-de-voiture-mohammedia_pt');
    //     Route::get('aluguel-carros-essaouira', 'HomeController@loc_essaouira')->name('location-de-voiture-essaouira_pt');
    //     Route::get('aluguel-carros-fez', 'HomeController@loc_fes')->name('location-de-voiture-fes_pt');
    // } else{
    //     Route::get('location-de-voiture-medina', 'HomeController@loc_medina')->name('location-de-voiture-medina');
    //     Route::get('location-de-voiture-gueliz', 'HomeController@loc_gueliz')->name('location-de-voiture-gueliz');
    //     Route::get('location-de-voiture-tanger', 'HomeController@loc_tanger')->name('location-de-voiture-tanger');
    //     Route::get('location-de-voiture-rabat', 'HomeController@loc_rabat')->name('location-de-voiture-rabat');
    //     Route::get('location-de-voiture-casablanca', 'HomeController@loc_casablanca')->name('location-de-voiture-casablanca');
    //     Route::get('location-de-voiture-agadir', 'HomeController@loc_agadir')->name('location-de-voiture-agadir');
    //     Route::get('location-de-voiture-mohammedia', 'HomeController@loc_mohammedia')->name('location-de-voiture-mohammedia');
    //     Route::get('location-de-voiture-essaouira', 'HomeController@loc_essaouira')->name('location-de-voiture-essaouira');
    //     Route::get('location-de-voiture-fes', 'HomeController@loc_fes')->name('location-de-voiture-fes');
    //     Route::get('location-de-voiture-a-marrakech', 'HomeController@loc_marrakech')->name('location-de-voiture-a-marrakech');
    //     Route::get('location-de-voiture-marrakech-pas-cher', 'HomeController@cher')->name('location-de-voiture-marrakech-pas-cher');
    //     Route::get('location-4-x-4-marrakech', 'HomeController@qat_qat')->name('location-4-x-4-marrakech');
    //     Route::get('location-voiture-marrakech-aeroport', 'HomeController@airport')->name('location-voiture-marrakech-aeroport');
    //     Route::get('location-voiture-marrakech-sans-caution', 'HomeController@caution')->name('location-voiture-marrakech-sans-caution');
    //     Route::get('location-voiture-marrakech-manuelle-automatique', 'HomeController@man_auto')->name('location-voiture-marrakech-manuelle-automatique');
    //     Route::get('location-voiture-automatique-marrakech', 'HomeController@loc_automatic')->name('location-voiture-automatique-marrakech');
    //     Route::get('location-voiture-manuelle-marrakech', 'HomeController@loc_manuel')->name('location-voiture-manuelle-marrakech');
    // }


    // Home Routes
Route::group(  [ 'middleware' => ['language_middleware','web']],function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/user/resend', 'UserController@resend')->name('resend_activation_mail');
    Route::post('/user/changeLanguage', 'UserController@changeLanguage')->name('change_language');
    Route::post('/user/changeCurrency', 'UserController@changeCurrency')->name('change_currency');
    Route::get('/user/reset', 'UserController@resetPassword')->name('reset_password');
    Route::post('/user/resend_mail', 'Auth\LoginController@resendMail')->name('resend_activation');
    Route::get('/user/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');
    Route::get('/user-register', 'UserController@register')->name('register')->middleware('logged');
    Route::post('/reCaptcha', 'HomeController@reCaptcha')->name('reCaptcha');
    Route::post('/review', 'HomeController@review')->name('make_review');
    Route::get('/login', 'UserController@login')->name('login')->middleware('logged');
    Route::get('/activate-account', 'UserController@activateAccount')->name('activate_account');
    Route::post('/search_page/{id}', 'SearchController@searchPage')->name('search_page');
    // Route::post('/search', 'SearchController@index')->name('search');
    Route::post('/searchref', 'SearchController@ref_search')->name('searchref');
    Route::post('/search_home/devis_email', 'SearchController@devis_email')->name('devis_email');
    Route::match(['get','post'],'/search', [SearchController::class,'cars'])->name('search_home');
    Route::get('/contact-us', 'HomeController@contact')->name('contact');
    Route::post('/mail/sendcontact', 'EmailController@contact')->name('send_contact');
    Route::get('/blog', 'BlogController@index')->name('blog');
    Route::get('/logout', 'UserController@logout')->name('logout');
    Route::get('/page/{alias}', 'PageController@index')->name('page');
    Route::get('blog/post/{alias}', 'BlogController@post')->name('single-post');
    Route::get('/villas/cars', 'ExploreController@cars')->name('explore_cars');
    Route::get('/villas/wishlist', 'ExploreController@wishlist')->name('wishlist');
    Route::get('general-conditions', 'HomeController@generalConditions')->name('generalconditions');
    Route::get('car-rental-marrakech', 'CarController@getParcAuto')->name('parc_auto');
    Route::get('faq', 'HomeController@faq')->name('faq');
    Route::get('location-de-voiture-marrakech-pas-cher', 'HomeController@cher')->name('location-de-voiture-marrakech-pas-cher');




    // Payments
    Route::post('/payment-page', 'PaymentController@index')->name('booking_pay_page');
    Route::post('/booking/payment', 'PaymentController@payment')->name('booking_pay');
    Route::get('/booking/payment/success', 'PaymentController@paymentSuccess')->name('book_payment_success');
    Route::get('/booking/payment/cancel', 'PaymentController@paymentCancel')->name('book_payment_cancel');
    Route::get('/booking/payment/thank-you', 'PaymentController@paymentThankYou')->name('book_payment_thank_you');

    // Social login
    Route::get('/facebook/redirect', 'SocialLoginController@facebookRedirect')->name('facebook_redirect');
    Route::get('/facebook/callback', 'SocialLoginController@facebookCallback')->name('facebook_callback');
    Route::get('/google/redirect', 'SocialLoginController@googleRedirect')->name('google_redirect');
    Route::get('/google/callback', 'SocialLoginController@googleCallback')->name('google_callback');

    // Explore
    Route::get('/villas/getcars', 'ExploreController@get_cars');
    Route::get('/villas/getwishlistcars', 'ExploreController@get_wishlist_cars');

    // Filter
    Route::post('/filter/cars', 'FilterController@cars');

    // Cars
    // Route::get('{alias}', 'CarController@index')->name('single-car');
    Route::post('/bookcar',[CarController::class, 'book'])->name('book_car');
    Route::get('/car-details/{id}/{car_name}', 'CarController@details')->name('car_details');
    Route::match(['get','post'],'/booking/{car_alias}',[CarController::class,'booking'])->name('booking_details');
    Route::post('/add-wishlist', 'CarController@add_to_wishlist');
    Route::post('/remove-wishlist', 'CarController@remove_from_wishlist');

    // Categories
    // Route::get('/marrakech-villas/{id}/cars', 'CategoryController@get_cars');
    // Route::get('/marrakech-villas/{alias}', 'CategoryController@index');

    // Locations
    Route::get('/location/{id}/villas', 'LocationController@get_cars');
    Route::get('/location/{alias}', 'LocationController@index');
    Route::post('/get_ajax_price', 'CarController@get_ajax_price')->name('get_ajax_price');
    Route::get('/change-lang', [HomeController::class,'changeLang'])->name('change_lang');
});
});

