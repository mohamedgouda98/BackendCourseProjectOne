<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SliderController;
use App\Http\Livewire\About;
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
    return view('index');
});


Route::get('/admin', [DashboardController::class, 'homeData'])->name('admin');

Route::group(['prefix' => 'admin'], function(){

    Route::post('/admin/slider/add', [SliderController::class, 'addSlider'])->name('slider.add');

    Route::put('/admin/about/add', [AboutController::class, 'updateAbout'])->name('about');

});

//Route::livewire('/about', [About::class, 'updateAbout']);


