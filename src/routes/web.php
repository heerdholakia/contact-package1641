<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

use test1641\Contact\Http\Controllers\ContactController;

// composer require test1641/contact

// Route::get('contact',function(){

// 	return "contact";

// });

// Route::get('contact',function(){

// 	return view('contact::contact');
// })->name('contact');


// Route::post('contact',function(Request $request){
// 	return $request->all();
// });


// Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('contact',[ContactController::class,'index'])->name('contact');

Route::post('contact',[ContactController::class,'store']);