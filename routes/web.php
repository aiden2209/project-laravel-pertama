<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Registered;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MlController;
use App\Http\Controllers\ProsesContoller;
use Illuminate\Support\Facades\Auth;

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
    return view('home',[
     "title" => "DELINA PAYTRUZZ | Agen PPOB Prabayar Termurah"
    ]);
});

Route::get('/blog', function () {
    return view('blog',[
        "title" => "DELINA | blog"
    ]);
});
Route::get('layout/main', function () {
    return view('layout/main');
});

Route::get('/faq', function () {
    return view('faq',[
        "title" => " DELINA | FAQ"
    ]);
});

Route::get('/about', function () {
    $blog_posts = [
        [
          "title" => "Judul Post Pertama",
          "author" => "Denis Prasetio",
          "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque, ex. A, reprehenderit voluptates rem libero facilis sint reiciendis temporibus, officia nisi nemo harum itaque officiis vitae dignissimos non numquam quam eum illum, beatae quas recusandae! Adipisci, illo dicta. Corporis, nisi! Impedit minima iusto illum ipsa laboriosam, sequi quo quasi cum similique eius natus possimus a est nam corporis officia, culpa quaerat hic odio ullam quis. Corporis totam labore rem omnis blanditiis explicabo quibusdam magni amet veniam eum at aspernatur itaque enim dolorem illum aut distinctio soluta, modi eligendi saepe. Amet repellat, cumque rerum numquam sint saepe adipisci pariatur molestiae consectetur."
        ],

        [
            "title" => "Judul Post Kedua",
            "author" => "Ahmad",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste officia quia aliquid sapiente at accusantium obcaecati accusamus. Debitis rem eos reprehenderit nisi libero voluptatum laudantium culpa. Consequuntur harum at soluta cum, minus mollitia asperiores aut quod, possimus quidem repellendus dolore autem? Molestiae dolorum aspernatur accusamus blanditiis vitae tempore excepturi deleniti in reiciendis, neque porro veritatis dolores necessitatibus doloribus nemo distinctio magni est non modi minima recusandae! Officia, quaerat. Nisi porro odit, veniam illo maiores molestiae! Sint aliquid nesciunt voluptatem repudiandae.  "
          ],
        ];
    
    return view('about',[
        "title" => "DELINA | Blog",
        "posts" => $blog_posts
    ]);
});

Route::get('harga/tsel', function () {
    return view('harga/tsel',[
        "title" => " DELINA | Harga Telkomsel"
    ]);
});
Route::get('harga/indosat', function () {
    return view('harga/indosat',[
        "title" => " DELINA | Harga Indosat"
    ]);
});
Route::get('harga/xl', function () {
    return view('harga/xl',[
        "title" => " DELINA | Harga XL"
    ]);
});
Route::get('harga/axis', function () {
    return view('harga/axis',[
        "title" => " DELINA | Harga Axis"
    ]);
});
Route::get('harga/smartfren', function () {
    return view('harga/smartfren',[
        "title" => " DELINA | Harga Smartfren"
    ]);
});
Route::get('harga/mobile-legends', function () {
    return view('harga/mobile-legends',[
        "title" => " DELINA | Harga Mobile Legends"
    ]);
});

// ini blog
Route::get('posts/all-post', function () {
    return view('posts/all-post/index',[
        "title" => " DELINA | Blog Post"
    ]);
});





// Layanan
Route::get('layanan/pulsa-seluler', function () {
    return view('layanan/pulsa-seluler',[
        "title" => " Layanan | Pulsa Seluler"
    ]);
});
Route::get('layanan/game', function () {
    return view('layanan/game',[
        "title" => " Layanan | Game"
    ]);
});
Route::get('layanan/voucher-game', function () {
    return view('layanan/voucher-game',[
        "title" => " Layanan | Voucher Game"
    ]);
});
Route::get('layanan/aplikasi-premium', function () {
    return view('layanan/aplikasi-premium',[
        "title" => " Layanan | Aplikasi Premium"
    ]);
});
// trems
Route::get('trems/trems-of-service', function () {
    return view('trems/trems-of-service',[
        "title" => " Trems of Service"
    ]);
});
Route::get('trems/privacy-policy', function () {
    return view('trems/privacy-policy',[
        "title" => " Privacy Policy"
    ]);
});

// ini login dan Logout
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'autenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// ini register
Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);



// Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard/index',[
        "title" => "Dsahboard"
    ]);
})->middleware('auth');

Route::get('/order', function () {
    return view('order/index',[
        "title" => "Delina | Order"
    ]);
})->middleware('auth');




// status
// Route::get('/status', [StatusController::class, 'index']);

Route::get('/status', function () {
    return view('/status/server',[
        "title" => " Status Server"
    ]);
});


// ini order
Route::get('/order/mobile-legends', [MlController::class, 'index'])->middleware('auth');
Route::post('/order', [MlController::class, 'store']);

Route::get('/order/proses', [ProsesContoller::class, 'index'])->middleware('auth');
Route::post('/order/proses', [ProsesContoller::class, 'store']);

