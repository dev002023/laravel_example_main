<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController; 
use App\Http\Controllers\controllerName;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use Symfony\Component\Finder\Iterator\CustomFilterIterator;

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
    return view('homepage');
});


Route::get('/home',function(){
    return view('homepage');
});


// Route::any('/demo', function(){
//     echo "route testing in laravel";
//   });

//   Route::get('/home2', function(){
//     return view('layout/home');
//   });

//   Route::get('/about', function(){
//     return view('layout/about');
//   });


//  Route::get('/test/{name}/{id?}',function($name, $id = null){
//     $data = compact('name','id');
//     return view('test')->with($data);
//  });



// Route::post('/test', function(){
//   echo "route testing in laravel";
// });


//   Route::put('/test', function(){
//     echo "route testing in laravel";
//   });

//   Route::patch('/test', function(){
//     echo "route testing in laravel";
//   });

//   Route::delete('/test', function(){
//     echo "route testing in laravel";
//   });


//Route::get('/', [DemoController::class,'index']); 
//Route::get('/about',[DemoController::class, 'about']);

// we have use it like as
 //Route::get('/about','App\Http\Controllers\DemoController@about');

//route for resource controller 
// Route::resource('/photo',PhotoController::class);

// Route::get("/",[UserController::class,'form']);
// Route::get('/form', [UserController::class,'form']);
// Route::post('/register', [UserController::class, 'register']);

// Route::get('/customer',function(){

//     $customers = Customer::all();
//     echo"<pre>";
//     print_r($customers->toArray());
// });



Route::get('/customer',[CustomerController::class, 'index']);
Route::post('/customer', [CustomerController::class, 'store'])->name('customer.create');
Route::get('/customer/view', [CustomerController::class, 'view']);
Route::get('/customer/delete/{id}', [CustomerController::class, 'delete']);