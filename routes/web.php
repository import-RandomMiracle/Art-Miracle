<?php

use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\BuyController;
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

Route::get('/category', function () {
    return view('category', ['currentUser' => ResourceController::getJson('user/current'),
     'categories' => ResourceController::getJson('categories')]);
});

Route::get('/tag', function () {
    return view('tag', ['currentUser' => ResourceController::getJson('user/current'), 'tags' => ResourceController::getJson('tags'),'currentUser' => ResourceController::getJson('user/current')]);
});

Route::post('image/store', [ImageController::class, 'storeImage'])->name('image.store');
Route::post('buy/artwork', [BuyController::class, 'buyArtwork'])->name('buy.artwork');

// Route::get('/home', function () {
//     return redirect('home');
// });

Route::get('/home/about', function () {
    return view('about', ['currentUser' => ResourceController::getJson('user/current')]);
});

Route::get('/home/benefits', function () {
    return view('benefits', ['currentUser' => ResourceController::getJson('user/current')]);
});

Route::get('/home/faq', function () {
    return view('faq', ['currentUser' => ResourceController::getJson('user/current')]);
});

Route::get('/home/contact', function () {
    return view('contact', ['currentUser' => ResourceController::getJson('user/current')]);
});

//Route::get('/artwork/detail', function () {
//    return view('detail');
//});

Route::controller(ArtworkController::class)->group(function () {
    Route::get('artwork', 'index')
        ->name("artworks.index");
    Route::get('artwork/detail/{id}', 'show')
        ->name('artwork.detail.id');
    // Route::post('artwork/buy/{id}', 'buy');
    Route::get('artwork/download/{id}', function () {
        return view(('artworkdownload'));
    });
});


Route::get('/wallet', function () {
    return view('wallet', ['currentUser' => ResourceController::getJson('user/current')]);
});

Route::get('/wallet/transfer', function () {
    return view('transfer', ['currentUser' => ResourceController::getJson('user/current')]);
});

Route::get('/wallet/topup/qr', function () {
    return view('qr', ['currentUser' => ResourceController::getJson('user/current')]);
});


Route::get('/wallet/topup', function () {
    return view('topup', ['currentUser' => ResourceController::getJson('user/current')]);
});

//Route::get('/artwork', function () {
//    return view('artwork');
//});

Route::get('/artist', function () {
    return view('artist', ['currentUser' => ResourceController::getJson('user/current')]);
});

Route::get('/sendfeedback', function () {
    return view('sendfeedback', ['currentUser' => ResourceController::getJson('user/current')]);
});

Route::get('/sell', function () {
    return view('sell', ['currentUser' => ResourceController::getJson('user/current')]);
});

Route::get('/changetoartist', function () {
    return view('change', ['currentUser' => ResourceController::getJson('user/current')]);
});

Route::get('/account/artworkcomment', function () {
    return view('artworkcomment', ['currentUser' => ResourceController::getJson('user/current')]);
});

Route::get('/account/artworkedit', function () {
    return view('artworkedit', ['currentUser' => ResourceController::getJson('user/current')]);
});

Route::get('/account/artworkdelete', function () {
    return view('artworkdelete', ['currentUser' => ResourceController::getJson('user/current')]);
});

Route::get('/account', function () {
    return view('account', ['currentUser' => ResourceController::getJson('user/current')]);
});

Route::get('/admin/artistreport', function () {
    return view('artistreport', ['currentUser' => ResourceController::getJson('user/current')]);
});

Route::get('/admin/artistreport', function () {
    return view('artistreport', ['currentUser' => ResourceController::getJson('user/current'),
                                'reports' => ResourceController::getJson('reports')]);
});

Route::get('/admin/postreport', function () {
    return view('postreport', ['currentUser' => ResourceController::getJson('user/current')]);
});

Route::get('/admin/postreport', function () {
    return view('postreport', ['currentUser' => ResourceController::getJson('user/current'), 
                                'reports' => ResourceController::getJson('reports')]);
});

Route::get('/admin/postreport/view', function () {
    return view('viewportreport', ['currentUser' => ResourceController::getJson('user/current')]);
});

Route::get('/admin/feedback', function () {
    return view('feedback', ['currentUser' => ResourceController::getJson('user/current')]);
});

Route::get('/admin/commentreport', function () {
    return view('commentreport', ['currentUser' => ResourceController::getJson('user/current')]);
});

Route::get('/artist', function () {
    return view('artist', ['users' => ResourceController::getJson('users'),'currentUser' => ResourceController::getJson('user/current')]);
});

Route::get('/account/artworkcomment', function () {
    return view('artworkcomment', ['artworks' => ResourceController::getJson('artworks'),'currentUser' => ResourceController::getJson('user/current')]);
});

//Route::controller(ArtistController::class)->group(function (){
//    Route::get('artists/{artist}/artworks','artworkOfArtist');
//});


Route::get('/home', function () {
    return view('home', ['artworks' => ResourceController::getJson('artwork/most/4'),
        'users' => ResourceController::getJson('artist/most/4'),
        'currentUser' => ResourceController::getJson('user/current')]);
});

//Route::get('/artwork', function () {
//    return view('artwork', ['artworks' => ResourceController::getJson('artworks')]);

Route::get('/account', function () {
    return view('account', ['currentUser' => ResourceController::getJson('user/current'),
    'artworks' => ResourceController::getJson('artworks')]);
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/add-sell', function () {
    return view('sell', ['currentUser' => ResourceController::getJson('user/current')]);
});
