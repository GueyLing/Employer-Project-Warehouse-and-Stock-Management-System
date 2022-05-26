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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin_dashboard', 'App\Http\Controllers\Admin\DashboardController@index')->middleware('role:admin');
Route::get('/admin_add', 'App\Http\Controllers\Admin\DashboardController@addStaff')->middleware('role:admin');
Route::post('/admin_store', 'App\Http\Controllers\Admin\DashboardController@store')->middleware('role:admin');
Route::get('/admin_delete/{id}', 'App\Http\Controllers\Admin\DashboardController@delete')->middleware('role:admin');
Route::get('/admin_edit/{id}', 'App\Http\Controllers\Admin\DashboardController@showData')->middleware('role:admin');
Route::post('/admin_edit', 'App\Http\Controllers\Admin\DashboardController@edit')->middleware('role:admin');


Route::get('/admin_warehousestaff', 'App\Http\Controllers\Admin\DashboardController@indexWarehouse')->middleware('role:admin');
Route::get('/admin_addwarehouse', 'App\Http\Controllers\Admin\DashboardController@addStaffWarehouse')->middleware('role:admin');
Route::post('/admin_storewarehouse', 'App\Http\Controllers\Admin\DashboardController@storeWarehouse')->middleware('role:admin');
Route::get('/admin_deletewarehouse/{id}', 'App\Http\Controllers\Admin\DashboardController@deleteWarehouse')->middleware('role:admin');
Route::get('/admin_editwarehouse/{id}', 'App\Http\Controllers\Admin\DashboardController@showDataWarehouse')->middleware('role:admin');
Route::post('/admin_editwarehouse', 'App\Http\Controllers\Admin\DashboardController@editWarehouse')->middleware('role:admin');



Route::get('/purchasingstaff_dashboard', 'App\Http\Controllers\PurchasingStaff\DashboardController@index')->middleware('role:purchasing_staff');


Route::get('/warehousestaff_dashboard', 'App\Http\Controllers\WarehouseStaff\DashboardController@index')->middleware('role:warehouse_staff');
Route::get('/warehousestaff_stocktake', 'App\Http\Controllers\WarehouseStaff\DashboardController@stockTake')->middleware('role:warehouse_staff');
Route::get('/warehousestaff_addnewstocktake', 'App\Http\Controllers\WarehouseStaff\DashboardController@addNewStockTake')->middleware('role:warehouse_staff');
Route::post('/warehousestaff_selectlocation', 'App\Http\Controllers\WarehouseStaff\DashboardController@selectLocation')->middleware('role:warehouse_staff');
Route::post('/warehousestaff_store', 'App\Http\Controllers\WarehouseStaff\DashboardController@store')->middleware('role:warehouse_staff');
Route::get('/warehousestaff_show/{id}', 'App\Http\Controllers\WarehouseStaff\DashboardController@showData')->middleware('role:warehouse_staff');
Route::get('/warehousestaff_lowstockalert', 'App\Http\Controllers\WarehouseStaff\DashboardController@lowStockAlert')->middleware('role:warehouse_staff');