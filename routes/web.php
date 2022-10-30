<?php

use App\Http\Controllers\ResourceController;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/artwork/detail', function () {
    return view('detail');
});

Route::get('/wallet', function (){
    return view('wallet');
});

Route::get('/wallet/transfer', function (){
    return view('transfer');
});

Route::get('/wallet/topup', function (){
    return view('topup');
});

Route::get('/artwork', function (){
    return view('artwork');
});

Route::get('/artist', function (){
    return view('artist');
});

Route::get('/account/artworkcomment', function (){
    return view(('artworkcomment'));
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/account/artistreport', function () {
    return view('artistreport');
});

Route::get('/account/postreport', function () {
    return view('postreport');
});

Route::get('/account/postreport/view', function () {
    return view('viewportreport');
});

Route::get('/account/feedback', function () {
    return view('feedback');
});

Route::get('/account/commentreport', function () {
    return view('commentreport');
});

Route::get('/artist',function () {
    return view('artist', ['users' => ResourceController::getJson('users')]);
});



Route::get('/artwork',function () {
    return view('artwork', ['artworks' => ResourceController::getJson('artworks')]);
});

Route::get('/test',function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/add-sell', function () {
    return view('sell');
});
