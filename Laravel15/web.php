<?php

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

Route::group(['prefix' => 'admin'],function(){
  Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
  Route::post('news/create', 'Admin\NewsController@create');
  Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
  Route::post('profile/create', 'Admin\ProfileController@create');
  Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
  Route::post('profile/edit', 'Admin\ProfileController@update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//1.GETメソッドとPOSTメソッドについて調べ、どのような違いがあるか説明してください。
//GETメソッドはホームページのサーバに値を渡す方法の一つで、「値をURLにくっつけてサーバに送る」やり方
//POSTメソッドは、「値を見えないところにくっつけてサーバに送る」やり方
//どちらもホームページのサーバに値を渡すやり方
//GETメソッドは、http://wa3.i-3-i.NumberFormatter?param1=value1&param2=value2　のようにURLの後ろにくっつける。
//POSTメソッドは、http://wa3.i-3-i.info　のようになる。
//封筒の宛先が書いてあるところに、ついでに内容も書いて送るのがGETメソッド。（配達の人にも内容が見えてしまう）
//内容を書いた紙を封筒の中に入れて送るのがPOSTメソッド（基本的には開けない限り読めない）


//2.【応用】 GET/POSTメソッド以外にどのようなメソッドがあるか、またどのように使われるかを説明してください。
