<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\VendorController;
// use App\Http\Controllers\ReportController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//route for view welcome page
Route::get('/', function () {
    return view('welcome');
});


Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index'); //Routes for mainpage
Route::get('/payment/{payment}/view', [PaymentController::class, 'view'])-> name('payment.view'); //Route for view payment details
Route::get('/payment/create', [PaymentController::class, 'create'])->name('payment.create'); //Route for create payment details
Route::post('/payment', [PaymentController::class, 'store'])->name('payment.store'); //Route for store payment details
Route::get('/payment/{payment}/edit', [PaymentController::class, 'edit'])-> name('payment.edit'); //Routes for edit payment details
Route::put('/payment/{payment}/update',[PaymentController::class, 'update'])->name('payment.update'); //Routes for update payment details
Route::delete('/payment/{payment}/destroy',[PaymentController::class, 'destroy'])->name('payment.destroy'); //Routes for delete payment details

Route::get('/inventorydata','App\Http\Controllers\InventoryController@mainpage');//route for inventory mainpage
Route::post('/inventorydata/create','App\Http\Controllers\InventoryController@create');//route for create item
Route::get('/inventorydata/{id}/view','App\Http\Controllers\InventoryController@view');//route for view the selected item
Route::get('/inventorydata/{id}/edit','App\Http\Controllers\InventoryController@edit');//route for edit the existing item
Route::post('/inventorydata/{id}/update','App\Http\Controllers\InventoryController@update');//route for update the selected item
Route::get('/inventorydata/{id}/delete','App\Http\Controllers\InventoryController@delete');//route for delete selected item

Route::get('/vendordata','App\Http\Controllers\VendorController@mainpage');//route for view vendor page
Route::post('/vendordata/create','App\Http\Controllers\VendorController@create');//route for create vendor
Route::get('/vendordata/{id}/view','App\Http\Controllers\VendorController@view');//route for view selected vendor
Route::get('/vendordata/{id}/edit','App\Http\Controllers\VendorController@edit');//route for go to edit page with selected vendor
Route::post('/vendordata/{id}/update','App\Http\Controllers\VendorController@update');//route for update selected vendor
Route::get('/vendordata/{id}/delete','App\Http\Controllers\VendorController@delete');//route for delete selected vendor

Route::get('/reportdata','App\Http\Controllers\ReportController@mainpage');//route for view report page
Route::post('/reportdata/create','App\Http\Controllers\ReportController@create');//route for create report
Route::get('/reportdata/{id}/view','App\Http\Controllers\ReportController@view');//route for view selected report
Route::get('/reportdata/{id}/edit','App\Http\Controllers\ReportController@edit');//route for go to edit page with selected report
Route::post('/reportdata/{id}/update','App\Http\Controllers\ReportController@update');//route for update selected report
Route::get('/reportdata/{id}/delete','App\Http\Controllers\ReportController@delete');//route for delete selected report



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



// Route::get('vendordata', [VendorController::class, 'mainpage'])->name('vendordata');
// Route::get('reportdata', [ReportController::class, 'mainpage'])->name('reportdata');


