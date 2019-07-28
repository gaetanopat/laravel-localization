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
Route::group([
  'prefix' => LaravelLocalization::setLocale(),  // dico che questo gruppo ha questo prefisso
  'middleware' => [ 'localize' ]  // ha questo middleware che mi permetterà di vedere al posto di about us, chi siamo nell’url
], function() {
  Route::get('/', function () {
      return view('home');
  })->name('home');

  Route::get(LaravelLocalization::transRoute('routes.privacy-policy'), function(){
      return view('privacy-policy');
  })->name('privacy-policy');
});
