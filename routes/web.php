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


// Route::get('/', function () {
//     return view('welcome');
// });




//backend
Route::get('/', 'backend\LoginController@GetLogin');//->middleware('Login');
Route::post('/', 'backend\LoginController@PostLogin');
Route::get('/logout', 'backend\LoginController@GetLogout')->name('logout');

Route::group(['prefix'=>'admin','middleware'=>'Login'],function () {
Route::get('/', 'backend\LoginController@GetIndex');

    //user
    Route::prefix('user')->group(function () {
        Route::get('/', 'backend\UserController@ListUser');
        Route::get('/add', 'backend\UserController@AddUser')->name('adduser');
        Route::post('/add', 'backend\UserController@PostAddUser');
        Route::get('/edit/{id}', 'backend\UserController@EditUser')->name('edituser');
        Route::post('/edit/{id}', 'backend\UserController@PostEditUser');
        Route::get('/delete/{id}', 'backend\UserController@DeleteUser'); 
    });

    //category
    Route::prefix('category')->group(function () {
        Route::get('/', 'backend\CategoryController@GetCate');
        Route::post('/', 'backend\CategoryController@PostCate');
        Route::get('/edit/{id_category}', 'backend\CategoryController@GetEditCate');
        Route::post('/edit/{id_category}', 'backend\CategoryController@PostEditCate');
        Route::get('/delete/{id_category}', 'backend\CategoryController@GetDeletephp arCate');
    });

    //product
    Route::prefix('product')->group(function () {
        Route::get('/add', 'backend\ProductController@AddProduct')->name('addproduct');
        Route::post('/add', 'backend\ProductController@PostAddProduct');
        Route::get('/edit/{id}', 'backend\ProductController@EditProduct');
        Route::post('/edit/{id}', 'backend\ProductController@PostEditProduct');
        Route::get('/delete/{id}', 'backend\ProductController@DeleteProduct');
        Route::get('/', 'backend\ProductController@ListProduct');
    });

    //order
    Route::prefix('order')->group(function () {
        Route::get('/', 'backend\OrderController@GetOrder');
        Route::get('/detail/{id}', 'backend\OrderController@DetailOrder');
        Route::get('/paid/{id}', 'backend\OrderController@PaidOrder');
        Route::get('/processed', 'backend\OrderController@Processed');
    });

});


//frontend

Route::get('about', 'frontend\IndexController@GetAbout');
Route::get('contact', 'frontend\IndexController@GetContact');

Route::get('index', 'frontend\IndexController@GetIndex');
Route::get('about', 'frontend\IndexController@GetAbout');
Route::get('contact', 'frontend\IndexController@GetContact');

Route::get('{slug}.html','frontend\IndexController@GetPrdCate');
Route::get('filter','frontend\IndexController@Getfilter');

//product
Route::group(['prefix'=>'product'], function(){
    Route::get('detail/{slug}', 'frontend\ProductController@GetDetail');
    Route::get('shop', 'frontend\ProductController@GetShop');
});

//cart
Route::group(['prefix'=>'cart'], function(){
    Route::get('', 'frontend\CartController@GetCart');
    Route::get('add', 'frontend\CartController@AddCart');
    Route::get('update/{row_Id}/{qty}', 'frontend\CartController@UpdateCart');
    Route::get('delete/{row_Id}', 'frontend\CartController@DeleteCart');
});

//checkout
Route::group(['prefix'=>'checkout'], function(){
    Route::get('', 'frontend\CheckoutController@GetCheckout');
    Route::post('', 'frontend\CheckoutController@PostCheckout');
    Route::get('complete/{id}', 'frontend\CheckoutController@GetComplete')->name('complete');
});
