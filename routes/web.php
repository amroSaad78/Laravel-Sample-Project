<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return App::call('App\Http\Controllers\HomeController@show', ['lang' => 'ar']);
});

Route::get('/en', function(){
    return App::call('App\Http\Controllers\HomeController@show', ['lang' => 'en']);
});

Route::post('/', function(){
    return App::call('App\Http\Controllers\HomeController@getPrice', ['lang' => 'ar']);
});

Route::post('/en', function(){
    return App::call('App\Http\Controllers\HomeController@getPrice', ['lang' => 'en']);
});

Route::get('ar/{page}', function ($page) {
    return view("ar.$page",['page'=>$page]);
})->whereIn('page', ["services","lemozine","conditions"]);

Route::get('en/{page}', function ($page) {
    return view("en.$page",['page'=>$page]);
})->whereIn('page', ["services","lemozine","conditions"]);
