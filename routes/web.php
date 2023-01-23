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

// Route::get('/', function () {
//     return view('welcome');
// });

// home pages
Route::get('/', function () {
    return view('ui/front/landing', [
        "title" => "Home",
        "pages" => "landing"
    ]);
});


// halaman index
Route::get('/dashboard-ui', function () {
    return view('ui.landing');
});

Route::get('/coffee', function () {
    return view('ui/front/coffee', [
        "title" => "Coffee Collection",
        "pages" => "product"
    ]);
});

Route::get('/detail-coffee', function () {
    return view('ui/detail-coffee', [
        "title" => "Detail Coffee",
        "pages" => "detail"
    ]);
});

// cart pages
Route::get('/cart', function () {
    return view('ui/front/cart', [
        "title" => "Shopping Cart",
        "pages" => "cart"
    ]);
});

// checkout pages
Route::get('/checkout', function () {
    return view('ui/front/checkout', [
        "title" => "Shipping & Checkout",
        "pages" => "checkout"
    ]);
});

// user pages
Route::get('/user', function () {
    return view('ui/front/user', [
        "title" => "Account",
        "pages" => "user"
    ]);
});

// signin pages
Route::get('/signin', function () {
    return view('ui/front/signin', [
        "title" => "Sign In",
        "pages" => "signin"
    ]);
});

// signup pages
Route::get('/signup', function () {
    return view('ui/front/signup', [
        "title" => "Sign Up",
        "pages" => "signup"
    ]);
});

// gallery pages
Route::get('/gallery', function () {
	return view('ui/front/gallery', [
		"title" => "Gallery",
		"pages" => "gallery"
	]);
});

// cafe pages
Route::get('/cafe', function () {
	return view('ui/front/cafe', [
		"title" => "Cafe",
		"pages" => "cafe"
	]);
});

// partnership pages
Route::get('/partnership', function () {
	return view('ui/front/partnership', [
		"title" => "Partnership",
		"pages" => "partnership"
	]);
});

// explore pages
Route::get('/explore', function () {
	return view('ui/front/explore', [
		"title" => "Explore",
		"pages" => "explore"
	]);
});

// membership pages
Route::get('/membership', function () {
	return view('ui/front/membership', [
		"title" => "Membership",
		"pages" => "membership"
	]);
});

// machines pages
Route::get('/machines', function () {
	return view('ui/front/machines', [
		"title" => "Kraton",
		"pages" => "machines"
	]);
});

// master
Route::get('/master', function () {
	return view('ui/front/master', [
		"title" => "master",
		"pages" => "master"
	]);
});

