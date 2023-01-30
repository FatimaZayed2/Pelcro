<?php
/******************************* api route************************************************* */






use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

/*Route::get('/', function () {
    return view('auth.login');
});*/
Route::get('/', [App\Http\Controllers\AppController::class, 'index'])->where('any','*');

/*



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/{page}', [App\Http\Controllers\AdminController::class, 'index']);

Route::resource('AllCustomers', CustomerController::class);
Route::get('ACustomer', [App\Http\Controllers\CustomerController::class, 'index1'])->name('A.customer');

Route::get('add-customer', [App\Http\Controllers\CustomerController::class, 'create'])->name('add.customer');
Route::post('customer', [App\Http\Controllers\CustomerController::class, 'store'])->name('submit.customer');
Route::get('customeredit/{id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('edit.customer');
Route::post('updatecustomer/{id}', [App\Http\Controllers\CustomerController::class, 'Update'])->name('update.customer');
Route::get('customer-show/{id}', [App\Http\Controllers\CustomerController::class, 'show'])->name('show.customer');

Route::delete('/customerDeleteAll', [App\Http\Controllers\CustomerController::class, 'deleteAll']);
Route::get('Deletecustomer/{id}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('delete.customer');
*/

