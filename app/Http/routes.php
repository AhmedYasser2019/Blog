<?php
use \Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::group(['middleware' => 'web'] , function (){

    Route::get('/',[
        'uses' => 'PostController@getBlogIndex',
        'as' => 'blog.index'
    ]);
    Route::get('/blog',[
        'uses' => 'PostController@getBlogIndex',
        'as' => 'blog.index'
    ]);
    Route::get('/blog/{post_id}',[
        'uses' => 'PostController@getSinglePost',
        'as' => 'blog.single'
    ]);
    /* other routes */
    Route::get('/about',function (){
        return view('frontend.other.about');
    })->name('about');
    Route::get('/contact',[
        'uses' => 'ContactMessageController@getContactIndex',
        'as' => 'contact'
    ]);

    Route::group([
        'prefix' => '/admin']
        , function (){
        Route::get('/',[
            'uses' => 'AdminController@getIndex',
            'as' => 'admin.index'
        ]);

        });
});