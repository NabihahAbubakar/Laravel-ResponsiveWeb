<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\booking;
use App\Models\Bookingform;
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

Route::get('/home', function () {
    return view('home');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/booking',[booking::class,'index']);
Route::post('/booking',[booking::class,'result']);

Route::get('/bookingform', function(){
$bookingform = Bookingform::all();
echo "<pre>";
print_r($bookingform->toArray());
});