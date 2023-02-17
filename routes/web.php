<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\reportiotclient;
use App\Http\Controllers\RiwayatController;
use App\Models\penyakit;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClusterpetaniController;
use App\Http\Controllers\DataClusterController;
use App\Http\Controllers\GetpenanamanbawangBaseController;
use App\Http\Controllers\HamaController;
use App\Http\Controllers\KsPestisidaController;
use App\Http\Controllers\KsPupukController;
use App\Http\Controllers\LokasiSawahController;
use App\Http\Controllers\PanenController;
use App\Http\Controllers\PenanamanBawangController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\SsensorsawahController;
use App\Http\Controllers\SummaryclusterController;
use App\Http\Controllers\GooglemapsController;
use App\Http\Controllers\KegiatansawahController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\LokasiPetaniController;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::get('/tambahdatapenanamanbawang', [PenanamanBawangController::class, 'tambahdatapenanamanbawang'])->name('tambahdatapenanamanbawang');
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	// Route::get('addbiodata', ['as' => 'profile.addbiodata']);

	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);

	Route::get('/addbiodata', function () {
		return view('profile.addbiodata');
	});
	Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

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

	Route::post('/autocomplete/fetch', 'PostController@fetch')->name('autocomplete.fetch');
	// Form Lokasi Sawah
	Route::get('/datalokasisawah', [LokasiController::class, 'datalokasisawah'])->name('datalokasisawah');
	Route::get('/formtambahdatalokasisawah', [LokasiController::class, 'formtambahdatalokasisawah'])->name('formtambahdatalokasisawah');
	Route::post('/insertdatalokasisawah', [LokasiController::class, 'insertdatalokasisawah'])->name('insertdatalokasisawah');
	Route::get('/formeditdatalokasisawah/{id}', [LokasiController::class, 'formeditdatalokasisawah'])->name('formeditdatalokasisawah');
	Route::post('/updatedatalokasisawah/{id}', [LokasiController::class, 'updatedatalokasisawah'])->name('updatedatalokasisawah');
	// Route::get('/deletedatalokasisawah/{id}', [LokasiController::class, 'deletedatalokasisawah'])->name('deletedatalokasisawah');
	Route::get('/deletedatalokasisawah/{userid}/{lokasi_keterangan}', [LokasiController::class, 'deletedatalokasisawah'])->name('deletedatalokasisawah');

	// Route::post('/post/kirimlokasi', [LokasiSawahController::class, 'tambahlokasi']);
	Route::get('add-blog-post-form', [PostController::class, 'index']);
	Route::post('store-form', [PostController::class, 'store']);
	Route::post('readpenebas', [PostController::class, 'readpenebas']);

	// Route::get('/getDataLokasiSawah', [LokasiSawahController::class, 'getDataLokasiSawah'])->name('getDataLokasiSawah');

	// Kegiatan Sawah
	// Route::get('datakegiatansawah', [KegiatansawahController::class, 'index']);
	// Route::get('tambahdatakegiatansawah', [KegiatansawahController::class, 'tambahdatakegiatansawah']);
	// Route::post('storedatakegiatansawah', [KegiatansawahController::class, 'store']);

	// Kegiatan Penanaman Bawang
	Route::get('/datapenanamanbawang', [PenanamanBawangController::class, 'datapenanamanbawang'])->name('datapenanamanbawang');
	Route::post('/insertdatapenanamanbawang', [PenanamanBawangController::class, 'insertdatapenanamanbawang'])->name('insertdatapenanamanbawang');
	Route::get('/tampildatapenanamanbawang/{id}', [PenanamanBawangController::class, 'tampildatapenanamanbawang'])->name('tampildatapenanamanbawang');
	Route::post('/updatedatapenanamanbawang/{id}', [PenanamanBawangController::class, 'updatedatapenanamanbawang'])->name('updatedatapenanamanbawang');
	Route::get('/viewpenanamanbawang', [PenanamanBawangController::class, 'viewpenanamanbawang'])->name('viewpenanaman');


	// Pestisida
	Route::get('/datapestisida', [KsPestisidaController::class, 'datapestisida'])->name('datapestisida');
	Route::get('/tambahdatapestisida', [KsPestisidaController::class, 'tambahdatapestisida'])->name('tambahdatapestisida');
	Route::post('/insertdatapestisida', [KsPestisidaController::class, 'insertdatapestisida'])->name('insertdatapestisida');
	Route::get('/tampildatapestisida/{id}', [KsPestisidaController::class, 'tampildatapestisida'])->name('tampildatapestisida');
	Route::post('/updatedatapestisida/{id}', [KsPestisidaController::class, 'updatedatapestisida'])->name('updatedatapestisida');
	Route::get('/deletepestisida/{id}', [KsPestisidaController::class, 'deletepestisida'])->name('deletepestisida');


	// Pupuk
	Route::get('/datapupuk', [KsPupukController::class, 'datapupuk'])->name('datapupuk');
	Route::get('/tambahdatapupuk', [KsPupukController::class, 'tambahdatapupuk'])->name('tambahdatapupuk');
	Route::post('/insertdatapupuk', [KsPupukController::class, 'insertdatapupuk'])->name('insertdatapupuk');
	Route::get('/tampildatapupuk/{id}', [KsPupukController::class, 'tampildatapupuk'])->name('tampildatapupuk');
	Route::post('/updatedatapupuk/{id}', [KsPupukController::class, 'updatedatapupuk'])->name('updatedatapupuk');
	//delete
	Route::get('/deletepupuk/{id}', [KsPupukController::class, 'deletepupuk'])->name('deletepupuk');

	// Data sensor sawah (IoT)
	Route::get('datassensorsawah', [reportiotclient::class, 'reportdataiot'])->name('datassensorsawah');

	// Form Panen
	Route::get('/datapanen', [PanenController::class, 'datapanen'])->name('datapanen');
	Route::get('/formtambahdatapanen/{id}', [PanenController::class, 'formtambahdatapanen'])->name('formtambahdatapanen');
	Route::post('/insertdatapanen', [PanenController::class, 'insertdatapanen'])->name('insertdatapanen');
	Route::get('/formeditdatapanen/{id}', [PanenController::class, 'formeditdatapanen'])->name('formeditdatapanen');
	Route::post('/updatedatapanen/{id}', [PanenController::class, 'updatedatapanen'])->name('updatedatapanen');
	Route::get('/deletedatapanen/{id}', [PanenController::class, 'deletedatapanen'])->name('deletedatapanen');
	Route::post('/verifypetani', [PanenController::class, 'verifypetani'])->name('verifypetani');
	Route::get('/edit/{id}', [PanenController::class, 'edit'])->name('panens.edit');
	Route::get('/cari', [PostController::class, 'loaddata'])->name('loaddata');
	// Route::post('/verifypetani', [GetpenanamanbawangBaseController::class, 'verifypetani'])->name('verifypetani');

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
	Route::get('/keterangancluster', [ClusterpetaniController::class, 'tampildatajson'])->name('tampildatajson');
	Route::get('/getData', [ClusterpetaniController::class, 'getData'])->name('getData');


	// Summary Cluster 
	Route::get('/summarycluster', [SummaryclusterController::class, 'index'])->name('summarycluster');

	//lokasi
	Route::get('/lokasipetani', [LokasiPetaniController::class, 'index'])->name('lokasipetani');

	//maps
	Route::get('/maps', [GooglemapsController::class, 'index'])->name('maps');
	Route::get('/lokasipetani', [LokasiPetaniController::class, 'index'])->name('lokasipetani');


	Route::get('/riwayatpanen', [RiwayatController::class, 'index'])->name('riwayatPanen');

	//pdf
	// Route::get('/pdf/{id}', function () {
	// 	$data = DB::table('penanaman_bawangs')
	// 		->join('panens', 'panens.id_penanaman', '=', 'penanaman_bawangs.id_user')
	// 		->select(
	// 			'penanaman_bawangs.id_user',
	// 			'penanaman_bawangs.ks_metode_pengairan',
	// 			'penanaman_bawangs.ks_modal',
	// 			'penanaman_bawangs.ks_luas_lahan',
	// 			'penanaman_bawangs.ks_bibit',
	// 			'penanaman_bawangs.ks_waktu_tanam',
	// 			'penanaman_bawangs.ks_status_lahan',
	// 			'penanaman_bawangs.ks_jumlah_modal',
	// 			'penanaman_bawangs.kabupaten',
	// 			'penanaman_bawangs.id_lokasisawah',
	// 			'panens.panen_tanggal'
	// 		)
	// 		->where('penanaman_bawangs.ks_panen', 1)
	// 		->where('penanaman_bawangs.id', $id)
	// 		->get();
	// 	// $pdf = PDF::loadView('pdf.view', compact('data'));
	// 	$pdf = PDF::loadView('pdf.pdf', compact('data'));
	// 	return $pdf->download('your_file_name.pdf');
	// });
	Route::get('/pdf/{id}', [RiwayatController::class, 'pdfpanen'])->name('pdfpanen');
});

Route::get('/kspenyakit', [PenyakitController::class, 'index'])->name('kspenyakit.index');

// Route::get('/menu/kspenyakit', [PenanamanBawangController::class, 'kegiatansawahorm']);

// Route::resource('PenyakitController', 'PenyakitController');
Route::get('/kspenyakit/create', [PenyakitController::class, 'create'])->name('kspenyakit.create');
Route::post('/kspenyakit', [PenyakitController::class, 'store'])->name('kspenyakit.store');
// Route::get('/kspenyakit', 'PenyakitController@index')->name('kspenyakit.index');