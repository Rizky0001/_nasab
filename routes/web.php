<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPeopleController;

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

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard/admin', function () {
    return view('admin.dashboard.index');
})->name('admin.dashboard.index');

Route::get('/dashboard/users', function () {
    return view('users.dashboard.index');
})->name('users.dashboard.index');

Route::get('/tree', function () {
    return view('admin.tree.index');
})->name('admin.tree.index');

Route::get('/navbar', function () {
    return view('admin.navbar');
})->name('admin.navbar');

Route::get('/sidebar', function () {
    return view('admin.sidebar');
})->name('admin.sidebar');

Route::get('/viewprofil', function () {
    return view('admin.viewprofil');
})->name('admin.viewprofil');

Route::get('/admin/people/edit', function () {
    return view('admin.people.editPenggunaUtama');
})->name('admin.people.editPenggunaUtama');

Route::get('/admin/people/create', [AdminPeopleController::class, 'create'])->name('admin.people.tambahPenggunaUtama');

Route::get('/admin/people', [AdminPeopleController::class, 'index'])->name('admin.people.kelolaPenggunaUtama');
