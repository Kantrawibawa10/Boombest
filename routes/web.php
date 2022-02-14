<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminBarangController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminIklanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UbahPasswordController;
use App\Http\Controllers\EditPasswordController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\AdminKategoriController;
use App\Http\Controllers\Admin\AdminMemberController;
use App\Http\Controllers\Admin\AdminPoinController;
use App\Http\Controllers\Admin\AdminTokoController;
use App\Http\Controllers\Member\MemberBarangController;
use App\Http\Controllers\Member\MemberController;
use App\Http\Controllers\Member\MemberPoinController;
use App\Http\Controllers\Member\MemberTokoController;
use App\Http\Controllers\TerbaruController;
use App\Http\Controllers\TokoController;
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


//////////////////////////////////////////////////   USER   ///////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////   INDEX PAGE   //////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/', [IndexController::class, 'index'])
    ->name('homepage');

//member
Route::get('/user', [IndexController::class, 'member'])
    ->name('member');
Route::get('/user/editprofile/{id}', [IndexController::class, 'edit']);
Route::post('/user/updateprofile/{id}', [IndexController::class, 'update']);
//member

//new password
Route::get('/editpassword', [EditPasswordController::class, 'index'])->name('editpassword');
Route::post('/editpassword', [EditPasswordController::class, 'update'])->name('postubah1');


Route::get('/info', [IndexController::class, 'info'])
    ->name('info');
Route::get('/poinmember', [IndexController::class, 'poin'])
    ->name('poinMember');
Route::get('/merchant', [IndexController::class, 'merchant'])
    ->name('merchant');
Route::get('/barcode', [IndexController::class, 'barcode'])
    ->name('barcode');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////   LOGIN, REGISTER & LOGOUT   //////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// logout
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
// login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
// register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);




  // halaman home
  Route::get('/home', [BarangController::class, 'index'])
      ->name('home');
  Route::get('/home/detail/{id}', [BarangController::class, 'show']);
  //Route::get('/home/detailProduk/{id}', [BarangController::class, 'detail']);

  // halaman all kategoi
  Route::get('/allcategory', [KategoriController::class, 'index'])->name('allcategory');
  Route::get('/detailkategori/{kategori}', [KategoriController::class, 'detailkategori'])->name('detailkategori');
  Route::get('/detailkategori/detail/{id}', [BarangController::class, 'show']);
  //Route::get('/detailkategori/detailproduk/{id}', [BarangController::class, 'show']);

  // halaman terbaru
  Route::get('/terbaru', [TerbaruController::class, 'index'])->name('terbaru');
  Route::get('/terbaru/daerah/{daerah}', [TerbaruController::class, 'daerah']);
  Route::get('/terbaru/detail/{id}', [BarangController::class, 'show']);

  // halaman toko
  Route::get('/toko/{referal}', [TokoController::class, 'toko'])->name('toko');
  Route::get('/toko/detail/{id}', [BarangController::class, 'show']);
  //Route::get('/toko/detailProduk/{id}', [BarangController::class, 'detail']);



  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////   SEARCH ENGINE PAGE   //////////////////////////////////////////////////////
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  // home search engine
  Route::get('/search', [BarangController::class, 'search'])->name('search');

  // detail kategori search engine
  Route::get('/searchbarangkategori/{kategori}', [KategoriController::class, 'search'])->name('searchbarangkategori');

  // barang toko search engine
  Route::get('/searchbarangdetail/{referal}', [TokoController::class, 'search'])->name('searchbarangdetail');








///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////validasi start role user/////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


Route::group(['middleware' => ['auth','ceklevel:member']], function(){
//////////////////////////////////////////////////   MEMBER   ///////////////////////////////////////////////////////////









//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////      DASHBOARD MEMBER    ////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// halaman dashboard
Route::get('/dashboardmember', [MemberController::class, 'index'])->name('dashboardMember');



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////      PROFILE MEMBER    /////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// profile member
Route::get('/profile', [MemberController::class, 'profile'])->name('profile');

// edit profile
Route::get('/profile/editprofile/{id}', [MemberController::class, 'edit']);
Route::post('/profile/updateprofile/{id}', [MemberController::class, 'update']);
//new password
Route::get('/ubahpassword', [UbahPasswordController::class, 'index'])->name('ubahpassword');
Route::post('/ubahpassword', [UbahPasswordController::class, 'update'])->name('postubah');




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////      BARANG MEMBER    /////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// halaman produk member
Route::get('/produksaya', [MemberBarangController::class, 'index'])->name('produksaya');
Route::get('/produksaya/detail/{id}', [MemberBarangController::class, 'show']);

// tambah produk
Route::get('/produksaya/add', [MemberBarangController::class, 'add']);
Route::post('/produksaya/insert', [MemberBarangController::class, 'create']);

// edit produk
Route::get('/produksaya/edit/{id}', [MemberBarangController::class, 'edit']);
Route::post('/produksaya/update/{id}', [MemberBarangController::class, 'update']);

// hapus produk
Route::get('/produksaya/delete/{id}', [MemberBarangController::class, 'destroy']);


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////      TOKO MEMBER    //////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// halaman toko member
Route::get('/tokosaya', [MemberTokoController::class, 'index'])->name('tokosaya');
Route::get('/tokosaya/detail/{id}', [MemberTokoController::class, 'show']);

// edit toko
Route::get('/tokosaya/edittoko/{referal}', [MemberTokoController::class, 'edit'])->name('edittoko');
Route::post('/tokosaya/edittoko/post/{referal}', [MemberTokoController::class, 'update']);

// buat toko
Route::get('/buattoko', [MemberController::class, 'buattoko'])->name('buattoko');
Route::post('/buattoko', [MemberController::class, 'store']);



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////      POIN MEMBER    //////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// koin member
Route::get('/poin', [MemberPoinController::class, 'index'])->name('poin');



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////   SEARCH ENGINE MEMBER PAGE   ////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// barang search engine
Route::get('/searchmybarang', [MemberBarangController::class, 'search'])->name('searchMyBarang');

// toko search engine
Route::get('/searchmybarangintoko/{referal}', [MemberTokoController::class, 'search'])->name('searchMyToko');
});











//////////////////////////////////////////////////   ADMIN   ///////////////////////////////////////////////////////////








//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////      DASHBOARD ADMIN    /////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// halaman dashboard
Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////    ADMIN    ///////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// halaman Admin
Route::get('/profileadmin', [AdminController::class, 'profileAdmin'])->name('profileAdmin');
Route::get('/tableadmin', [AdminController::class, 'tableAdmin'])->name('tableAdmin');
Route::get('/addadmin', [AdminController::class, 'create'])->name('addAdmin');

// hapus admin
Route::get('/tableadmin/destroyadmin/{kode_admin}', [AdminController::class, 'destroy']);

//edit admin
Route::get('/tableadmin/editadmin/{id}', [AdminController::class, 'edit']);
Route::post('/tableadmin/updateadmin/{id}', [AdminController::class, 'update']);

// search admin
Route::get('/searchadmin', [AdminController::class, 'searchAdmin'])->name('searchAdmin');




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////     IKLAN ADMIN   /////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// halaman Iklan
Route::get('/tableiklan', [AdminIklanController::class, 'allIklan'])->name('tableIklan');

// tambah iklan
Route::get('/tableiklan/addiklan/', [AdminIklanController::class, 'create'])->name('addIklan');
Route::post('/tableiklan/postiklan/', [AdminIklanController::class, 'store'])->name('postIklan');

// detail iklan
Route::get('/tableiklan/dataiklan/{level}', [AdminIklanController::class, 'show'])->name('dataIklan');

// destroy iklan
Route::get('/tableiklan/destroyiklan/{id}', [AdminIklanController::class, 'destroy'])->name('destroyIklan');

// edit iklan
Route::get('/tableiklan/dataiklan/editiklan/{id}', [AdminIklanController::class, 'edit']);
Route::post('/tableiklan/dataiklan/updateiklan/{id}', [AdminIklanController::class, 'update']);

// search iklan
Route::get('/searchiklan', [AdminIklanController::class, 'searchIklan'])->name('searchIklan');



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////   MEMBER ADMIN  /////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// halman Member
Route::get('/memberaktif', [AdminMemberController::class, 'MOn'])->name('memberAktif');
Route::get('/memberaktif/memberplatinum', [AdminMemberController::class, 'MPlatinum'])->name('memberPlatinum');
Route::get('/memberaktif/memberbiasa', [AdminMemberController::class, 'MBiasa'])->name('memberBiasa');
Route::get('/memberexpired', [AdminMemberController::class, 'Mproses'])->name('memberExpired');
// detail member


// edit member
Route::get('/memberaktif/editmember/{id}', [AdminMemberController::class, 'edit']);
Route::post('/memberaktif/updatemember/{id}', [AdminMemberController::class, 'update']);

// hapus member
Route::get('/memberaktif/destroymember/{id}', [AdminMemberController::class, 'destroy']);

// search member
Route::get('/memberaktif/searchmember', [AdminMemberController::class, 'searchMember'])->name('searchMember');

Route::get('/memberaktif/namamember', [AdminMemberController::class, 'namamember'])->name('namamember');
Route::get('/memberaktif/noregister', [AdminMemberController::class, 'noregister'])->name('noregister');
Route::get('/memberaktif/noreferal', [AdminMemberController::class, 'noreferal'])->name('noreferal');
Route::get('/memberaktif/daftar', [AdminMemberController::class, 'daftar'])->name('daftar');
Route::get('/memberaktif/expired', [AdminMemberController::class, 'expired'])->name('expired');
Route::get('/memberaktif/group', [AdminMemberController::class, 'group'])->name('group');



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////    TOKO ADMIN   /////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// halaman Toko
Route::get('/tokoaktif', [AdminTokoController::class, 'TOn'])->name('tokoAktif');
Route::get('/tokoexpired', [AdminTokoController::class, 'Texpired'])->name('tokoExpired');

// edit toko
Route::get('/tokoaktif/edittoko/{referal}', [AdminTokoController::class, 'edit']);
Route::post('/tokoaktif/updatetoko/{referal}', [AdminTokoController::class, 'update']);

// detail toko
Route::get('/tokoaktif/detailtoko/{referal}', [AdminTokoController::class, 'show']);

// hapus toko
Route::get('/tokoaktif/destroytoko/{referal}', [AdminTokoController::class, 'destroy']);

// search toko
Route::get('/searchtoko', [AdminTokoController::class, 'searchToko'])->name('searchToko');

// search barang toko
Route::get('/searchbarangtoko/{referal}', [AdminTokoController::class, 'searchBarangToko'])->name('searchBarangToko');



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////   BARANG ADMIN  /////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// halaman Barang
Route::get('/tablebarang', [AdminBarangController::class, 'index'])->name('tableBarang');

// hapus barang
Route::get('/tablebarang/destroybarang/{id}', [AdminBarangController::class, 'destroy'] );

// edit barang
Route::get('/tablebarang/editbarang/{id}', [AdminBarangController::class, 'edit']);

Route::post('/tablebarang/updatebarang/{id}', [AdminBarangController::class, 'update']);

// detail barang
Route::get('/tablebarang/detailbarang/{id}', [AdminBarangController::class, 'show']);

// search barang
Route::get('/tablebarang/searchbarang', [AdminBarangController::class, 'search'])->name('searchBarang');
Route::get('/tablebarang/namabarang', [AdminBarangController::class, 'namabarang'])->name('namabarang');
Route::get('/tablebarang/namatoko', [AdminBarangController::class, 'namatoko'])->name('namatoko');
Route::get('/tablebarang/harga', [AdminBarangController::class, 'harga'])->name('harga');
Route::get('/tablebarang/kategoribarang', [AdminBarangController::class, 'kategoribarang'])->name('kategoribarang');
Route::get('/tablebarang/wilayahbarang', [AdminBarangController::class, 'wilayahbarang'])->name('wilayahbarang');




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////   KATEGORI ADMIN  ////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// halaman category
Route::get('/tablecategory', [AdminKategoriController::class, 'index'])->name('tableCategory');

// destroy category
Route::get('/tablecategory/destroycategory/{id}', [AdminKategoriController::class, 'destroy']);

// add category
Route::get('/tablecategory/addcategory/', [AdminKategoriController::class, 'create'])->name('addCategory');
Route::post('/tablecategory/postcategory/', [AdminKategoriController::class, 'store'])->name('postCategory');

// search kategori
Route::get('/searchkategori', [AdminKategoriController::class, 'searchKategori'])->name('searchKategori');



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////   POIN ADMIN   /////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// halaman point
Route::get('/pointmember', [AdminPoinController::class, 'index'])->name('pointMember');

// tarik point
// Route::get('/pointmember/tarikpoint/{referal}', [AdminPoinController::class, 'edit']);

// search member
Route::get('/searchpoint', [AdminPoinController::class, 'searchPoint'])->name('searchPoint');

Route::get('/pointmember/searchmember', [AdminPoinController::class, 'searchMember'])->name('searchMember');
Route::get('/pointmember/namamember', [AdminPoinController::class, 'namamember'])->name('namamember');
Route::get('/pointmember/noregister', [AdminPoinController::class, 'noregister'])->name('noregister');
Route::get('/pointmember/noreferal', [AdminPoinController::class, 'noreferal'])->name('noreferal');
Route::get('/pointmember/daftar', [AdminPoinController::class, 'daftar'])->name('daftar');
Route::get('/pointmember/expired', [AdminPoinController::class, 'expired'])->name('expired');
Route::get('/pointmember/group', [AdminPoinController::class, 'group'])->name('group');




