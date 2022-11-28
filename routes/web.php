<?php

use App\Http\Controllers\reportiotclient;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClusterpetaniController;
use App\Http\Controllers\DataClusterController;
use App\Http\Controllers\HamaController;
use App\Http\Controllers\KsPestisidaController;
use App\Http\Controllers\KsPupukController;
use App\Http\Controllers\LokasiSawahController;
use App\Http\Controllers\PanenController;
use App\Http\Controllers\PenanamanBawangController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\SsensorsawahController;
use App\Http\Controllers\SummaryclusterController;
use GuzzleHttp\Client;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
	Route::get('map', function () {
		return view('pages.maps');
	})->name('map');
	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');
	Route::get('table-list', function () {
		return view('pages.tables');
	})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

// Form Lokasi Sawah
Route::get('/formlokasisawah', [LokasiSawahController::class, 'index']);
Route::post('/formlokasisawah', [LokasiSawahController::class, 'tambahlokasi'])->name('location.store');
// Route::get('/getDataLokasiSawah', [LokasiSawahController::class, 'getDataLokasiSawah'])->name('getDataLokasiSawah');

// Penanaman Bawang
Route::get('/datapenanamanbawang', [PenanamanBawangController::class, 'datapenanamanbawang'])->name('datapenanamanbawang');
Route::get('/tambahdatapenanamanbawang', [PenanamanBawangController::class, 'tambahdatapenanamanbawang'])->name('tambahdatapenanamanbawang');
Route::post('/insertdatapenanamanbawang', [PenanamanBawangController::class, 'insertdatapenanamanbawang'])->name('insertdatapenanamanbawang');
Route::get('/tampildatapenanamanbawang/{id}', [PenanamanBawangController::class, 'tampildatapenanamanbawang'])->name('tampildatapenanamanbawang');
Route::post('/updatedatapenanamanbawang/{id}', [PenanamanBawangController::class, 'updatedatapenanamanbawang'])->name('updatedatapenanamanbawang');

// Pestisida
Route::get('/datapestisida', [KsPestisidaController::class, 'datapestisida'])->name('datapestisida');
Route::get('/tambahdatapestisida', [KsPestisidaController::class, 'tambahdatapestisida'])->name('tambahdatapestisida');
Route::post('/insertdatapestisida', [KsPestisidaController::class, 'insertdatapestisida'])->name('insertdatapestisida');
Route::get('/tampildatapestisida/{id}', [KsPestisidaController::class, 'tampildatapestisida'])->name('tampildatapestisida');
Route::post('/updatedatapestisida/{id}', [KsPestisidaController::class, 'updatedatapestisida'])->name('updatedatapestisida');

// Pupuk
Route::get('/datapupuk', [KsPupukController::class, 'datapupuk'])->name('datapupuk');
Route::get('/tambahdatapupuk', [KsPupukController::class, 'tambahdatapupuk'])->name('tambahdatapupuk');
Route::post('/insertdatapupuk', [KsPupukController::class, 'insertdatapupuk'])->name('insertdatapupuk');
Route::get('/tampildatapupuk/{id}', [KsPupukController::class, 'tampildatapupuk'])->name('tampildatapupuk');
Route::post('/updatedatapupuk/{id}', [KsPupukController::class, 'updatedatapupuk'])->name('updatedatapupuk');

// Data sensor sawah (IoT)
Route::get('datassensorsawah', [reportiotclient::class, 'reportdataiot'])->name('datassensorsawah');
// Form Panen
Route::get('/datapanen', [PanenController::class, 'index'])->name('datapanen');
Route::get('/tambahdatapanen', [PanenController::class, 'tambahdatapanen'])->name('tambahdatapanen');

// Form Hama
Route::get('/datahama', [HamaController::class, 'index'])->name('datahama');
Route::get('/tambahdatahama', [HamaController::class, 'tambahdatahama'])->name('tambahdatahama');

// Form Penyakit
Route::get('/datapenyakit', [PenyakitController::class, 'index'])->name('datapenyakit');
Route::get('/tambahdatapenyakit', [PenyakitController::class, 'tambahdatapenyakit'])->name('tambahdatapenyakit');
Route::get('/test2', [reportiotclient::class, 'reportdataiot']);

// Cluster Petani
Route::get('/clusterpetani', [ClusterpetaniController::class, 'index'])->name('clusterpetani');
Route::post('/clusterpetanijson', [ClusterpetaniController::class, 'clusterpetanijson'])->name(' clusterpetanijson');
Route::get('/tampildatajson', [ClusterpetaniController::class, 'tampildatajson'])->name('tampildatajson');
Route::get('/getData', [ClusterpetaniController::class, 'getData'])->name('getData');
// Summary Cluster 
Route::get('/summarycluster', [SummaryclusterController::class, 'index'])->name('summarycluster');

//

// Route::get('tambahlokasi', [clientcontroller::class, 'index']);
// Route::post('lokasiterkirim', [clientcontroller::class, 'tambahlokasi']);


// Route::get('tambahlokasi', [clientcontroller::class, 'index']);
// Route::post('lokasiterkirim', [clientcontroller::class, 'tambahlokasi']);





// test api
// Route::post('/test', [DataClusterController::class, 'store']);

//  Coba API ke Python
Route::get('/Api-Post-Data', function () {
	$client = new Client();
	$api_url = "http://127.0.0.1:5000/api";
	$res = $client->post($api_url, [
		'json' => [
			'name' => 'eduarena',
			'education' => 'Computer Science',
			'age' => '24',
			'email' => 'eduarena@gmail.com'
		]
	]);
	$data_body = $res->getBody();
	echo $data_body;
});

Route::get('/Api-Get-Data', function () {
	$client = new Client();
	$data = $client->get('http://127.0.0.1:5000/Getdata');
	$data_body = $data->getBody();

	$api = $data_body;
	return $api;
});
