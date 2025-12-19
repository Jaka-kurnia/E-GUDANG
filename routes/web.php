<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

Route::get('/', function () {
    return view('welcome');
});

Route::view('superadmin/user/index','superadmin.user.index')->name('superadmin.user.index');

Route::view('superadmin/kategori/index','superadmin.kategori.index')->name('superadmin.kategori.index');

Route::view('superadmin/barang/index','superadmin.barang.index')->name('superadmin.barang.index');