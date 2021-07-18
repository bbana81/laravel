<?php

use App\Http\Controllers\HelloController;
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
Route::post('hello', [HelloController::class, 'post']);
Route::get('hello', [HelloController::class, 'index']);

Route::get('hello_tmp', function(){
    $date = ['date' => '2021/07/18'];
    return view('hello.index', $date);
});

Route::get('hello_test', [HelloController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('hello', function () {
    return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
});
*/



route::get('hello_html/{msg?}',function ($msg='no message'){
    $html = <<<EOF
    <html>
    <head>
    <style>
    body {font-size:16pt; color:#999;}
    h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
    </style>
    </head>
    <body>
        <h1>Hello</h1>
        <p>{$msg}</p>
        <p>これは、サンプルで作ったページです。</p>
    </body>
    </html>
    EOF;
    return $html;
});
/*
Route::get('hello_html', function () use ($html) {
    return $html;
});
*/

