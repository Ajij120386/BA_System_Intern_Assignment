
<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController; //add CustomersController
 
//Route::get('/', function () {
//    return view('welcome');
//});
   
Route::get('/', [CustomersController::class, 'index']);
Route::get('ajaxdata', [CustomersController::class, 'getdata'])->name('getdata');