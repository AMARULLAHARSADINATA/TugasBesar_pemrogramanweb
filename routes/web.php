<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\AdminRegisterController;

Route::get('/order/create', [OrderController::class, 'createOrder'])->name('order.create');

Route::get('/admin/orders/create', [OrderController::class, 'create'])->name('orders.create.admin');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// Route untuk menampilkan form login
Route::get('admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login.form');

// Route untuk menangani login
Route::post('admin/login', [AdminLoginController::class, 'login'])->name('admin.login');

// Route untuk halaman home admin
Route::get('admin/home', function () {
    return view('home_admin'); // Pastikan ini mengarah ke file home_admin.blade.php
})->name('home_admin');

// Tambahkan route untuk register jika ada
Route::get('admin/register', [AdminLoginController::class, 'showRegistrationForm'])->name('admin.register');

// Route untuk menampilkan form login
Route::get('admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login.form');

// Route untuk menangani login
Route::post('admin/login', [AdminLoginController::class, 'login'])->name('admin.login');

// Route untuk halaman home admin
Route::get('admin/home', function () {
    return view('home_admin'); // Pastikan ini mengarah ke file home_admin.blade.php
})->name('home_admin');

// Route untuk menampilkan form login
Route::get('admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login.form');

// Route untuk menangani login
Route::post('admin/login', [AdminLoginController::class, 'login'])->name('admin.login');

// Route untuk halaman home admin
Route::get('admin/home', function () {
    return view('home_admin'); 
})->name('admin.home');


Route::get('admin/register', [AdminRegisterController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('admin/register', [AdminRegisterController::class, 'register']);

// Rute untuk login admin
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login']);

// Rute untuk register admin
Route::get('/admin/register', [AdminRegisterController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('/admin/register', [AdminRegisterController::class, 'register']);


// Rute untuk halaman admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

// Route untuk orders
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/{id}/edit', [OrderController::class, 'edit'])->name('orders.edit');
Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::get('/home-admin', [AdminController::class, 'index'])->name('home.admin');
// Rute untuk menangani permintaan pembaruan
Route::put('/orders/{id}', [OrderController::class, 'update'])->name('orders.update');
Route::get('order/create', [OrderController::class, 'create'])->name('order.create');


// Route untuk users
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');



// // Rute untuk mengelola orders
// Route::resource('orders', OrderController::class);

// // Rute untuk mengelola users
// Route::resource('users', UserController::class);

// Rute untuk menampilkan form pesanan
Route::get('/pesan', [OrderController::class, 'create'])->name('order.create');

// Rute untuk mengirim pesanan
Route::post('/pesan', [OrderController::class, 'store'])->name('order.store');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Route untuk dashboard admin tanpa middleware
Route::get('/admin/dashboard', function () {
    return view('home_admin'); // Mengarahkan ke home_admin.blade.php
})->name('home_admin'); // Menambahkan nama rute


// Rute GET untuk menampilkan halaman registrasi
Route::get('/register', [AuthController::class, 'create'])->name('register.form');

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/home_1', function () {
    return view('home');
});

// Route untuk halaman about_us
Route::get('/about-us', function () {
    return view('about_us');
});

// Route untuk halaman about_us
Route::get('/cari-referensi', function () {
    return view('cari_referensi');
});

// Route untuk halaman about_us
Route::get('/login_1', function () {
    return view('login');
});


