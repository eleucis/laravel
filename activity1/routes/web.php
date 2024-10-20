<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Blogs2Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ExternalAPI;
use Illuminate\Support\Facades\Route;


Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.submit');

Route::get('/product',[ExternalAPI::class, 'getExternalProduct']);


Route::group(['prefix' => 'get', 'middleware' => 'with_ext_api_key'], function(){
    Route::get('/blogs',[ExternalAPI::class, 'authenticateWithKey']);
});


// Route::fallback(function(){
//     return "<img src='/images/404.png'>";
// });

Route::get('about', function (){
    $about = 'This is about Page';
    $sample = ' Sample';
    return view('about', compact('about'), compact('sample'));
});

Route::get('contact', function (){
    return view('main.contact');
});

Route::get('admin', function (){
    return view('main.master');
});


// Route::get('dashboard', function(){
//     $blogs = [
//         [
//             'title' => 'Title one',
//             'body' => 'body one',
//             'status' => 1
//         ],
//         [
//             'title' => 'Title two',
//             'body' => 'body two',
//             'status' => 0
//         ]
//         ,
//         [
//             'title' => 'Title three',
//             'body' => 'body three',
//             'status' => 1
//         ]
//         ,
//         [
//             'title' => 'Title four',
//             'body' => 'body four',
//             'status' => 0
//         ]
//         ,
//         [
//             'title' => 'Title five',
//             'body' => 'body five',
//             'status' => 1
//         ]
//         ,
//         [
//             'title' => 'Title six',
//             'body' => 'body six',
//             'status' => 1
//         ]
//     ];
//     return view('dashboard', compact('blogs'));

// });

Route::group(['prefix' => 'blog'], function(){

    Route::get('/',[BlogController::class, 'index'])->name('blog.showdata');

    Route::get('/create',[BlogController::class,'showCreateForm']);

    Route::post('/create',[BlogController::class, 'createBlogData'])->name('blog.create');

    Route::get('/update',[BlogController::class, 'updateBlogData']);

    Route::get('/delete',[BlogController::class, 'deleteBlogData']);

    Route::get('/blogs/data',[BlogController::class, 'getAllData']);

    

    

});

Route::get('/blog2', [Blogs2Controller::class, 'index']);
    