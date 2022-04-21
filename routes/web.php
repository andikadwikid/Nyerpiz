<?php

use App\Http\Controllers\Admin\ServiceAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;
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

Route::get('/test', function () {
    return view('blank');
});

Route::get('/', function () {
    return view('landingpage.index');
});

Route::get('/login', function () {
    return view('user.login');
});
Route::get('sign-in-google', [HomeController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [HomeController::class, 'HandleProviderCallback'])->name('user.google.callback');

Route::middleware(['auth'])->group(function () {
    Route::get('/transaksi', [HomeController::class, 'transaksi'])->name('transaksi');
    Route::get('/dashboard/setting/profile/{id}', [HomeController::class, 'settingProfile'])->name('profile.setting');
    Route::put('/dashboard/setting/profile/{id}', [HomeController::class, 'updateProfile'])->name('profile.update');
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::middleware(['is_user'])->prefix('/dashboard')->group(function () {
        Route::get('/user', [ServiceController::class, 'index'])->name('dashboard.user');
        // Route::get('/user/search', [ServiceController::class, 'search'])->name('dashboard.user.search');
        Route::get('/form-servis', [ServiceController::class, 'create'])->name('user.form');
        Route::post('/form-servis/store', [ServiceController::class, 'store'])->name('user.form.post');
        Route::get('/detail-servis/{servis}', [ServiceController::class, 'show'])->name('user.detail.show');
        Route::get('/form-servis/edit/{servis}', [ServiceController::class, 'edit'])->name('user.form.edit');
        Route::put('/form-servis/update/{servis}', [ServiceController::class, 'update'])->name('user.form.update');
        Route::delete('/form-servis/cancel/{servis}', [ServiceController::class, 'delete'])->name('user.form.delete');
        Route::get('/user/transaksi', [ServiceController::class, 'transaksi'])->name('user.transaksi');
        Route::get('/user/transaksi/{transaksi}', [ServiceController::class, 'showTransaksi'])->name('user.show.transaksi');
        Route::get('/user/transaksi/confirm/{transaksi}', [ServiceController::class, 'bayar'])->name('user.bayar');
    });
    Route::middleware(['is_admin', 'auth'])->prefix('/dashboard')->group(function () {
        Route::get('/admin', [ServiceAdminController::class, 'search'])->name('dashboard.search.admin');
        Route::get('/admin/detail-servis/{servis}', [ServiceAdminController::class, 'show'])->name('admin.detail.show');
        Route::get('/admin/confirm-servis/{servis}', [ServiceAdminController::class, 'confirm'])->name('admin.confirm.servis');
        Route::post('/admin/confirm-servis/{servis}', [ServiceAdminController::class, 'confirmStore'])->name('admin.confirm.store');
        Route::get('/admin/transaksi', [ServiceAdminController::class, 'transaksi'])->name('admin.transaksi');
    });
});


// Route::get('/transaksi', function () {
//     return view('user.transaksi');
// });

// Route::get('/faker-servis', function () {
//     $faker = Faker::create('id_ID');

//     for ($i = 0; $i < 100; $i++) {
//         App\Models\ServisModel::create(
//             [
//                 'nomor_antri' => $faker->nik(),
//                 'id_user' => '4b8dfad1-54cd-4867-b4f9-5ca83b5425d0  ',
//                 'nama_barang' => $faker->sentence(),
//                 'merk_barang' => $faker->sentence(),
//                 'alamat' => $faker->address(),
//                 'no_telp' => $faker->numerify('08########'),
//                 'keluhan' => $faker->sentence(),
//                 'image' => $faker->sentence(),
//                 'layanan' => 0,
//                 'status' => $faker->randomElement(['pending', 'proses', 'selesai']),
//                 'tanggal_servis' => $faker->date('Y-m-d H:i:s'),
//                 'tindakan_servis' => $faker->date('Y-m-d H:i:s'),
//             ]
//         );
//     }

//     return "Data servis berhasil ditambah";
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
