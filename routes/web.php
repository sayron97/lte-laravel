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

Route::get('/', function () {
    return view('welcome');
});

//Route::group(['prefix'=>'admin/page','middleware'=>['auth']],function() {

Route::get('/',                           ['uses' => 'Admin\PagesController@showIndex', 'as' => 'showIndex']);
Route::get('/index',                      ['uses' => 'Admin\PagesController@showIndexSecond', 'as' => 'showIndexSecond']);

Route::get('/table',                      ['uses' => 'Admin\PagesController@showTable', 'as' => 'showTable']);
Route::get('/simple-table',               ['uses' => 'Admin\PagesController@showSimpleTable', 'as' => 'showSimpleTable']);

Route::get('/chart1',                     ['uses' => 'Admin\PagesController@showChart1', 'as' => 'showChart1']);
Route::get('/chart2',                     ['uses' => 'Admin\PagesController@showChart2', 'as' => 'showChart2']);
Route::get('/chart3',                     ['uses' => 'Admin\PagesController@showChart3', 'as' => 'showChart3']);
Route::get('/chart4',                     ['uses' => 'Admin\PagesController@showChart4', 'as' => 'showChart4']);

Route::get('/form-advanced',              ['uses' => 'Admin\PagesController@showFormAdvanced', 'as' => 'showFormAdvanced']);
Route::get('/form-editors',               ['uses' => 'Admin\PagesController@showFormEditors', 'as' => 'showFormEditors']);
Route::get('/form-general',               ['uses' => 'Admin\PagesController@showFormGeneral', 'as' => 'showFormGeneral']);

Route::get('/layout-boxed',               ['uses' => 'Admin\PagesController@showLayoutBoxed', 'as' => 'showLayoutBoxed']);
Route::get('/layout-collapsed',           ['uses' => 'Admin\PagesController@showLayoutCollapsed', 'as' => 'showLayoutCollapsed']);
Route::get('/layout-fixed',               ['uses' => 'Admin\PagesController@showLayoutFixed', 'as' => 'showLayoutFixed']);
Route::get('/layout-top-nav',             ['uses' => 'Admin\PagesController@showLayoutTopNav', 'as' => 'showLayoutTopNav']);

Route::get('/mailbox-compose',            ['uses' => 'Admin\PagesController@showMailboxCompose', 'as' => 'showMailboxCompose']);
Route::get('/mailbox-mailbox',            ['uses' => 'Admin\PagesController@showMailboxMailbox', 'as' => 'showMailboxMailbox']);
Route::get('/mailbox-read-mail',          ['uses' => 'Admin\PagesController@showMailboxReadMail', 'as' => 'showMailboxReadMail']);

Route::get('/examples-404',               ['uses' => 'Admin\PagesController@showExamples404', 'as' => 'showExamples404']);
Route::get('/examples-500',               ['uses' => 'Admin\PagesController@showExamples500', 'as' => 'showExamples500']);
Route::get('/examples-blank',             ['uses' => 'Admin\PagesController@showExamplesBlank', 'as' => 'showExamplesBlank']);
Route::get('/examples-invoice',           ['uses' => 'Admin\PagesController@showExamplesInvoice', 'as' => 'showExamplesInvoice']);
Route::get('/examples-invoice-print',     ['uses' => 'Admin\PagesController@showExamplesInvoicePrint', 'as' => 'showExamplesInvoicePrint']);
Route::get('/examples-lockscreen',        ['uses' => 'Admin\PagesController@showExamplesLockscreen', 'as' => 'showExamplesLockscreen']);
Route::get('/examples-login',             ['uses' => 'Admin\PagesController@showExamplesLogin', 'as' => 'showExamplesLogin']);
Route::get('/examples-pace',              ['uses' => 'Admin\PagesController@showExamplesPace', 'as' => 'showExamplesPace']);
Route::get('/examples-profile',           ['uses' => 'Admin\PagesController@showExamplesProfile', 'as' => 'showExamplesProfile']);
Route::get('/examples-register',          ['uses' => 'Admin\PagesController@showExamplesRegister', 'as' => 'showExamplesRegister']);

Route::get('/ui-buttons',                 ['uses' => 'Admin\PagesController@showUiButtons', 'as' => 'showUiButtons']);
Route::get('/ui-general',                 ['uses' => 'Admin\PagesController@showUiGeneral', 'as' => 'showUiGeneral']);
Route::get('/ui-icons',                   ['uses' => 'Admin\PagesController@showUiIcons', 'as' => 'showUiIcons']);
Route::get('/ui-modals',                  ['uses' => 'Admin\PagesController@showUiModals', 'as' => 'showUiModals']);
Route::get('/ui-sliders',                 ['uses' => 'Admin\PagesController@showUiSliders', 'as' => 'showUiSliders']);
Route::get('/ui-timeline',                ['uses' => 'Admin\PagesController@showUiTimeline', 'as' => 'showUiTimeline']);

Route::get('/calendar',                   ['uses' => 'Admin\PagesController@showCalendar', 'as' => 'showCalendar']);

Route::get('/widgets',                    ['uses' => 'Admin\PagesController@showWidgets', 'as' => 'showWidgets']);


//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
