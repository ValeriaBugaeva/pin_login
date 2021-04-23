<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\Sample4Controller;
use App\Http\Controllers\Sample5Controller;

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

//new routes added by developer Ibrahim

Route::get('/screen1', '\App\Http\Controllers\Dashboard\DashboardController@screen1');

Route::post('/screen3', '\App\Http\Controllers\Dashboard\DashboardController@screen3');

Route::get('/screen4', '\App\Http\Controllers\Dashboard\DashboardController@screen4');

Route::post('/step1_arrival', '\App\Http\Controllers\Dashboard\DashboardController@step2');

Route::get('/start', function () {
    return view('new.start');
});

Route::get('/arrive', function () {
    return view('new.arrive');
});

Route::get('/current', function () {
    return view('new.current');
});

Route::get('/departure', function () {
    return view('new.departure');
});

Route::get('/break', function () {
    return view('new.break');
});



//end of new routes

// Autre calendar
Route::get('sample5', [Sample5Controller::class, 'index']);

// Route::get('/sample', '\App\Http\Controllers\SampleController@index');
Route::get('sample', [SampleController::class, 'datatable_basic']);

Route::get('sample4', [Sample4Controller::class, 'index']);

Route::get('stats', [StatsController::class, 'index']);

Route::get('/sample2', function () {
    return view('sample2');
});

Route::get('/sample3', function () {
    return view('sample3');
});

Route::get('sweet-alerts', function () {
    return view('sweet-alerts');
});

// File Manager
// Route::get('/sample', '\App\Http\Controllers\AppsController@file_manager')->name('file-manager');

Route::get('/document', '\App\Http\Controllers\FileUploadController@createForm');
Route::post('/document', '\App\Http\Controllers\FileUploadController@fileUpload')->name('fileUpload');

// Schedule
Route::get('schedule', [ScheduleController::class, 'index'])->name('schedule');

##################################### NEW DESIGN ##########################################



Route::get('/chat', '\App\Http\Controllers\AppsController@chatApp')->name('chat');
Route::get('/invoice/list', '\App\Http\Controllers\AppsController@invoice_list')->name('invoice-list');

Route::get('/invoice_list', '\App\Http\Controllers\AppsController@ajaxInvoice_list')->name('ajax-invoice-list');
Route::get('/staff_invoice_list', '\App\Http\Controllers\AppsController@ajaxStaffInvoice_list')->name('ajax-staff-invoice-list');

Route::get('/invoice/preview', '\App\Http\Controllers\AppsController@invoice_preview')->name('invoice-preview');
Route::get('/invoice/edit', '\App\Http\Controllers\AppsController@invoice_edit')->name('invoice-edit');
Route::get('/invoice/add', '\App\Http\Controllers\AppsController@invoice_add')->name('invoice-add');
Route::get('/ecommerce/shop', '\App\Http\Controllers\AppsController@ecommerce_shop')->name('ecommerce-shop');
Route::get('/ecommerce/details', '\App\Http\Controllers\AppsController@ecommerce_details')->name('ecommerce-details');
Route::get('/ecommerce/wishlist', '\App\Http\Controllers\AppsController@ecommerce_wishlist')->name('ecommerce-wishlist');
Route::get('/ecommerce/checkout', '\App\Http\Controllers\AppsController@ecommerce_checkout')->name('ecommerce-checkout');
Route::get('/file-manager', '\App\Http\Controllers\AppsController@file_manager')->name('file-manager');

// support
Route::get('/faq', '\App\Http\Controllers\AppsController@faq')->name('faq');
Route::get('/knowledge-base', '\App\Http\Controllers\AppsController@knowledge_base')->name('knowledge-base');
Route::get('/knowledge-base/category', '\App\Http\Controllers\AppsController@kb_category')->name('knowledge-base');
Route::get('/knowledge-base/category/question', '\App\Http\Controllers\AppsController@kb_question')->name('knowledge-base');

Route::get('/account-settings', [
    'as' => 'account-settings',
    'uses' => '\App\Http\Controllers\SettingsController@index',
])->middleware('auth');

// ToDo
Route::any('todo/{status?}', '\App\Http\Controllers\TodoController@index')->name('todo');
Route::any('add_task', '\App\Http\Controllers\TodoController@addTask');
Route::any('gettaskdetails', '\App\Http\Controllers\TodoController@getTaskDetails');
Route::any('updatetaskstatus', '\App\Http\Controllers\TodoController@updateTaskStatus');


// Location for Users only
Route::get('/location', '\App\Http\Controllers\LocationController@location')->name('location');
Route::get('location/listajax', '\App\Http\Controllers\LocationController@location_listajax')->name('location-listajax');
Route::any('location/getlocationdetails', '\App\Http\Controllers\LocationController@getLocationDetails');
Route::any('location/add_update_location', '\App\Http\Controllers\LocationController@addUpdateLocation');
Route::any('location/delete_location', '\App\Http\Controllers\LocationController@deleteLocation');
Route::any('shift/add_update_shift', '\App\Http\Controllers\LocationController@addUpdateShift');
Route::any('/collectivecode', '\App\Http\Controllers\LocationController@collectivecode');


Route::get('edit-location', function () {
    return view('company.location.edit');
});


// Calender controller
Route::any('/calendar/{status?}', '\App\Http\Controllers\CalendarController@index')->name('calendar');
Route::any('/getCalenderTask', '\App\Http\Controllers\CalendarController@getCalenderTask');
Route::post('/calender-add', '\App\Http\Controllers\CalendarController@store');
Route::any('/calender-update', '\App\Http\Controllers\CalendarController@calendarUpdate');
Route::any('/calender-delete', '\App\Http\Controllers\CalendarController@calenderDelete');
Route::get('/staff-search/{term?}', '\App\Http\Controllers\CalendarController@staffSearch');

// staff for Users only
Route::get('staff', '\App\Http\Controllers\CompanyController@staff_list')->name('staff');
Route::get('staff_list', '\App\Http\Controllers\CompanyController@staff_list')->name('staff_list');
Route::get('staff/listajax', '\App\Http\Controllers\CompanyController@staff_listajax')->name('staff');
Route::get('staff/listajax', '\App\Http\Controllers\CompanyController@staff_listajax')->name('staff-listajax');
Route::get('staff/{id}/edit', '\App\Http\Controllers\CompanyController@staff_edit')->name('staff-edit');
Route::post('staff/add', '\App\Http\Controllers\CompanyController@staff_add')->name('staff-add');
Route::post('staff/add_staff', '\App\Http\Controllers\CompanyController@addStaff')->name('add-staff');
Route::any('staff/edit_staff', '\App\Http\Controllers\CompanyController@editStaff');
Route::any('staff/delete_staff', '\App\Http\Controllers\CompanyController@deleteStaff');
Route::any('staff/getStaffDetails', '\App\Http\Controllers\CompanyController@getStaffDetails');
Route::get('staff/{id}', '\App\Http\Controllers\CompanyController@staff_view')->name('staff-view');
Route::any('staff/getcompanydetails', '\App\Http\Controllers\CompanyController@getCompanyDetails');

Route::post('staff_role/add', '\App\Http\Controllers\CompanyController@staff_role_add')->name('staff-role-add');
Route::get('role/edit/{id}', '\App\Http\Controllers\CompanyController@edit');
Route::get('role/role_listajax', '\App\Http\Controllers\CompanyController@role_listajax');
Route::post('role/update', '\App\Http\Controllers\CompanyController@update');


// Application Backup-ROUTES
Route::post('/backup-file', [
    'uses' => '\App\Http\Controllers\Settings\SettingsController@backupFiles',
    'as' => 'backup-files'
]);

Route::post('/backup-db', [
    'uses' => '\App\Http\Controllers\Settings\SettingsController@backupDb',
    'as' => 'backup-db'
]);

Route::post('/backup-download/{name}/{ext}', [
    'uses' => '\App\Http\Controllers\Settings\SettingsController@downloadBackup',
    'as' => 'backup-download'
]);

Route::post('/backup-delete/{name}/{ext}', [
    'uses' => '\App\Http\Controllers\Settings\SettingsController@deleteBackup',
    'as' => 'backup-delete'
]);

Route::get('/logout', [
    'uses' => '\App\Http\Controllers\Auth\LoginController@logout'
]);

Route::post('/verify-2fa', [
    'as' => 'verify-2fa',
    'uses' => '\App\Http\Controllers\Profile\ProfileController@verify'
]);

Route::post('/activate-2fa', [
    'uses' => '\App\Http\Controllers\Profile\ProfileController@activate',
    'as' => 'activate-2fa'
]);

Route::post('/enable-2fa', [
    'uses' => '\App\Http\Controllers\Profile\ProfileController@enable',
    'as' => 'enable-2fa'
]);

Route::post('/disable-2fa', [
    'uses' => '\App\Http\Controllers\Profile\ProfileController@disable',
    'as' => 'disable-2fa'
]);

Route::get('/2fa/instruction', [
    'uses' => '\App\Http\Controllers\Profile\ProfileController@instruction',
]);


Route::get('/', [
    'as' => 'home',
    'uses' => '\App\Http\Controllers\Dashboard\DashboardController@index',
])->middleware('auth');

Route::post('/checkPIN', [
    'as' => 'checkPIN',
    'uses' => '\App\Http\Controllers\Dashboard\DashboardController@validatePIN',
]);

Route::get('/showDashboard', [
    'as' => 'Dashboards',
    'uses' => '\App\Http\Controllers\Dashboard\DashboardController@showDashboard',
]);

/*
| Stripe Subscription Routes
*/
Route::get('/subscription', [
    'as' => '/subscription',
    'uses' => '\App\Http\Controllers\SubscriptionController@index',
]);

Route::get('/subscription/subscribe', [
    'as' => '/subscription/subscribe',
    'uses' => '\App\Http\Controllers\SubscriptionController@notSubscribed',
]);

Route::get('/subscription/stripe/{plan_id}', [
    'as' => '/subscription/stripe',
    'uses' => '\App\Http\Controllers\SubscriptionController@stripeCheckout',
]);

Route::post('/subscription/stripe/subscribe', [
    'as' => '/subscription/stripe/subscribe',
    'uses' => '\App\Http\Controllers\SubscriptionController@stripeSubscribe',
]);

Route::get('/subscription-invoice/{invoiceId}', [
    'uses' => '\App\Http\Controllers\SubscriptionController@stripeInvoice',
]);

Route::get('/subscription-cancel/{subscriptionId}', [
    'uses' => '\App\Http\Controllers\SubscriptionController@cancelSubscription',
]);
/*
| Stripe Subscription Routes
*/

/*
| Premium Content Routes
*/
Route::resource('/premium-content', '\App\Http\Controllers\PremiumContent\PremiumContentController')
    ->middleware('premium');
/*
| Premium Content Routes
*/

/*
|  Activitylog Route
*/
Route::resource('activity-log', '\App\Http\Controllers\Activitylog\ActivitylogController');
Route::get('admin/activity-log', '\App\Http\Controllers\Activitylog\ActivitylogController@admin_activity_log')->name('admin.admin_activity_log');
/*
|  Activitylog Route
*/


/*
| Profile Routes
*/

Route::resource('profile', '\App\Http\Controllers\Profile\ProfileController');

Route::get('update-avatar/{id}', [
    'as' => 'update-avatar',
    'uses' => '\App\Http\Controllers\Profile\ProfileController@showAvatar'
]);

Route::post('update-avatar/{id}', '\App\Http\Controllers\Profile\ProfileController@updateAvatar');

Route::post('update-profile-login/{id}', [
    'uses' => '\App\Http\Controllers\Profile\ProfileController@updateLogin',
    'as' => 'update-login',
]);

// updateProfileInformation
Route::post('update-profile-information/{id}', [
    'uses' => '\App\Http\Controllers\Profile\ProfileController@updateProfileInformation',
    'as' => 'user-information',
]);

/*
| Profile Routes
*/

// Socialite Authentication Route
Route::get('login/{provider}', '\App\Http\Controllers\Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', '\App\Http\Controllers\Auth\LoginController@handleProviderCallback');

#####################################ADMIN MANAGED SECTION##########################################
// Users Route
Route::resource('user', '\App\Http\Controllers\UserController');

Route::get('user/show', '\App\Http\Controllers\UserController@show')->name('user.show');
Route::get('user/edit/{id}', '\App\Http\Controllers\UserController@edit')->name('user.edit');
Route::get('user/delete/{id}', '\App\Http\Controllers\UserController@destroy')->name('user.delete');

Route::post('update-user-login/{id}', [
    'as' => 'user-login',
    'uses' => '\App\Http\Controllers\UserController@userLogin'
]);

Route::get('user/{id}/activity-log/', [
    'as' => 'user-activitlog',
    'uses' => '\App\Http\Controllers\UserController@userActivityLog'
]);

// Users Route


// Roles Route
Route::resource('role', '\App\Http\Controllers\Role\RoleController');
//	Route::post('role/store', '\App\Http\Controllers\Role\RoleController@store');





Route::post('/role-permission/{id}', [
    'as' => 'roles_permit',
    'uses' => '\App\Http\Controllers\Role\RoleController@assignPermission',
]);
// Roles Route


// Permission Route
Route::resource('permission', '\App\Http\Controllers\Permission\PermissionController');
// Permission Route


// Payment Gateway Route
Route::get('/subscription/plan', [
    'as' => '/subscription/plan',
    'uses' => '\App\Http\Controllers\PaymentGateway\PaymentGatewayController@viewStripePlans',
]);

Route::get('subscription/ajax_plan', ['uses' => '\App\Http\Controllers\PaymentGateway\PaymentGatewayController@subscription_ajax_plan']);
Route::get('subscription-income/ajaxList', ['uses' => '\App\Http\Controllers\PaymentGateway\PaymentGatewayController@manageIncomeAjaxList']);


Route::get('/subscription/plan/create', [
    'as' => '/subscription/plan/create',
    'uses' => '\App\Http\Controllers\PaymentGateway\PaymentGatewayController@createStripePlan',
]);

Route::post('/subscription/plan/create', [
    'uses' => '\App\Http\Controllers\PaymentGateway\PaymentGatewayController@storeStripePlan',
]);

Route::get('/stripe/plan/edit/{plan_id}', [
    'as' => '/stripe/plan/edit',
    'uses' => '\App\Http\Controllers\PaymentGateway\PaymentGatewayController@editStripePlan',
]);

Route::post('/stripe/plan/edit/{id}/{plan_id}', [
    'uses' => '\App\Http\Controllers\PaymentGateway\PaymentGatewayController@updateStripePlan',
]);

Route::post('/stripe/plan/delete/{id}', [
    'as' => '/stripe/plan/delete',
    'uses' => '\App\Http\Controllers\PaymentGateway\PaymentGatewayController@deleteStripePlan',
]);

Route::get('/subscribed-users', [
    'uses' => '\App\Http\Controllers\PaymentGateway\PaymentGatewayController@manageSubscribedUser',
]);

Route::get('/user-subscription-invoice/{invoiceId}', [
    'uses' => '\App\Http\Controllers\PaymentGateway\PaymentGatewayController@subscriptionInvoice',
]);

Route::get('/user-subscription-cancel/{subscription_id}', [
    'uses' => '\App\Http\Controllers\PaymentGateway\PaymentGatewayController@cancelSub',
]);

Route::get('/subscription-income', [
    'uses' => '\App\Http\Controllers\PaymentGateway\PaymentGatewayController@manageIncome',
]);

Route::get('/checkout-sample', [
    'uses' => '\App\Http\Controllers\PaymentGateway\PaymentGatewayController@checkoutSamples',
]);

Route::get('/checkout-sample/article', [
    'uses' => '\App\Http\Controllers\PaymentGateway\PaymentGatewayController@download',
]);

Route::get('/checkout-sample/response/{session_id}', [
    'uses' => '\App\Http\Controllers\PaymentGateway\PaymentGatewayController@responseCheckout',
    'as' => '/checkout-sample/response'
]);

// Payment Gateway Route

Route::resource('settings', '\App\Http\Controllers\Settings\SettingsController');

Route::post('settings/name/update', [
    'as' => 'settings/name/update',
    'uses' => '\App\Http\Controllers\Settings\SettingsController@appNameUpdate',
]);
Route::post('settings/logo/update', [
    'as' => 'settings/logo/update',
    'uses' => '\App\Http\Controllers\Settings\SettingsController@appLogoUpdate',
]);

Route::post('settings/theme/update', [
    'as' => 'settings/theme/update',
    'uses' => '\App\Http\Controllers\Settings\SettingsController@appThemeUpdate',
]);

Route::post('settings/stripe-payment/update', [
    'as' => 'settings/stripe-payment/update',
    'uses' => '\App\Http\Controllers\Settings\SettingsController@stripePaymentUpdate',
]);

Route::post('settings/auth-settings/update', [
    'as' => 'settings/auth-settings/update',
    'uses' => '\App\Http\Controllers\Settings\SettingsController@authSettingsUpdate',
]);

// Premium Content
Route::resource('/article', '\App\Http\Controllers\Article\ArticleController');
Route::post('/article-image', '\App\Http\Controllers\Article\ArticleController@articleImageUpload');
Route::resource('/category-article', '\App\Http\Controllers\Article\ArticleCategoryController');
#####################################ADMIN MANAGED SECTION##########################################

#####################################CRUD GENERATOR ROUTES##########################################
Route::get('/crud-builder', [
    'as' => 'crud-builder',
    'uses' => '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder'
])->middleware('auth', 'web', 'role:admin', '2fa');

Route::get('/field-template', [
    'as' => 'field-template',
    'uses' => '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate'
])->middleware('auth', 'web', 'role:admin', '2fa');

Route::post('/generator-builder/generate', [
    'as' => 'generator-builder/generate',
    'uses' => '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate'
])->middleware('auth', 'web', 'role:admin', '2fa');

Route::post('/generator-builder/rollback', [
    'as' => 'generator-builder/rollback',
    'uses' => '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback'
])->middleware('auth', 'web', 'role:admin', '2fa');

Route::post('/model-check', [
    'as' => 'model-check',
    'uses' => '\App\Http\Controllers\CRUDController@checkModel'
]);

#####################################CRUD GENERATOR ROUTES##########################################

#####################################WEBHOOK ROUTE##########################################
Route::stripeWebhooks('stripe-webhook');
#####################################WEBHOOK ROUTE##########################################

Route::impersonate();
Auth::routes(['verify' => true]);

/*
|--------------------------------------------------------------------------
| Theme
|--------------------------------------------------------------------------
|
|
*/

// Route Components
// Route::get('/test', '\App\Http\Controllers\TestController@index');

Route::get('/test', [
    'as' => 'test',
    'uses' => '\App\Http\Controllers\TestController@index',
])->middleware('auth');

Route::get('/phone', '\App\Http\Controllers\StaterkitController@home')->name('phone');

Route::get('layouts/collapsed-menu', 'StaterkitController@collapsed_menu')->name('collapsed-menu');
Route::get('layouts/boxed', 'StaterkitController@layout_boxed')->name('layout-boxed');
Route::get('layouts/without-menu', 'StaterkitController@without_menu')->name('without-menu');
Route::get('layouts/empty', 'StaterkitController@layout_empty')->name('layout-empty');
Route::get('layouts/blank', 'StaterkitController@layout_blank')->name('layout-blank');

// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);
