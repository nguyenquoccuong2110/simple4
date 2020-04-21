<?php

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
    return view('welcome');
});
Route::get('index',[
	'as'=> 'trang-chu',
	'uses'=>'PageController@getIndex'
]);

Route::get('che-bien-thuc-pham',[
	'as'=>'chebienthucpham',
	'uses'=>'PageController@getChebien'

]);

Route::get('chi-tiet-lo-vi-song',[
	'as'=>'chitietlovisong',
	'uses'=>'PageController@getChitiet'

]);


Route::get('nganh-hang-con',[
	'as'=>'nganhhangcon',
	'uses'=>'PageController@getNganhhang'

]);


Route::get('nganh-hang-dien-gia-dung',[
	'as'=>'nganhhangdiengiadung',
	'uses'=>'PageController@getNganhhangdien'

]);

Route::get('tin-tuc',[
	'as'=>'tintuc',
	'uses'=>'PageController@getTintuc'

]);

Route::get('chi-tiet-tin-tuc',[
	'as'=>'chitiettintuc',
	'uses'=>'PageController@getChitiettintuc'

]);

Route::get('gioi-thieu',[
	'as'=>'gioithieu',
	'uses'=>'PageController@getGioithieu'

]);

Route::get('dang-nhap',[
	'as'=>'dangnhap',
	'uses'=>'PageController@getDangnhap'

]);
Route::post('dang-nhap',[
	'as'=>'dangnhap',
	'uses'=>'PageController@postDangnhap'

]);

Route::get('dang-ky',[
	'as'=>'dangky',
	'uses'=>'PageController@getDangky'

]);
Route::post('dang-ky',[
	'as'=>'dangky',
	'uses'=>'PageController@postDangky'

]);

Route::get('so-sanh',[
	'as'=>'sosanh',
	'uses'=>'PageController@getSosanh'

]);

Route::get('thong-tin-gio-hang',[
	'as'=>'thongtingiohang',
	'uses'=>'PageController@getThongtingiohang'

]);

Route::get('hoan-tat-gio-hang-tai-sieu-thi',[
	'as'=>'hoantatgiohangtaisieuthi',
	'uses'=>'PageController@getHoantatgiohangtaisieuthi'

]);
Route::get('hoan-tat-gio-hang-tai-nha',[
	'as'=>'hoantatgiohangtainha',
	'uses'=>'PageController@getHoantatgiohangtainha'

]);