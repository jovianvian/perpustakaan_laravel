<?php

use App\Http\Controllers\MyController;

Route::get('/login', [MyController::class, 'showLogin'])->name('login');
Route::post('/login', [MyController::class, 'login']);
Route::post('/logout', [MyController::class, 'logout'])->name('logout');
Route::get('/register', [MyController::class, 'showRegister'])->name('register');
Route::post('/register', [MyController::class, 'registerPost'])->name('register.post');


Route::get('/home', [MyController::class, 'home']);
Route::get('/databuku', [MyController::class, 'books']);
Route::get('/databuku/form', [MyController::class, 'tambah']);
Route::post('/databuku/save', [MyController::class, 'simpant']);
Route::get('/databuku/form/{id}', [MyController::class, 'edit']);
Route::post('/databuku/update/{id}', [MyController::class, 'simpane']);
Route::get('/databuku/delete/{id}', [MyController::class, 'delete']);

Route::get('/datamasuk', [MyController::class, 'dataMasukBuku']);
Route::get('/datamasuk/form', [MyController::class, 'tambahDataMasuk']);
Route::post('/datamasuk/simpan', [MyController::class, 'simpanDataMasuk']);
Route::get('/datamasuk/form/{id}', [MyController::class, 'editDataMasuk']);
Route::post('/datamasuk/update', [MyController::class, 'updateDataMasuk']);
Route::get('/datamasuk/hapus/{id}', [MyController::class, 'hapusDataMasuk']);

Route::get('/peminjaman', [MyController::class, 'peminjaman']);
Route::get('/peminjaman/form', [MyController::class, 'tambahPeminjaman']);
Route::post('/peminjaman/simpan', [MyController::class, 'simpanPeminjaman']);
Route::get('/peminjaman/form/{id}', [MyController::class, 'editPeminjaman']);
Route::post('/peminjaman/update', [MyController::class, 'updatePeminjaman']);
Route::get('/peminjaman/hapus/{id}', [MyController::class, 'hapusPeminjaman']);
Route::get('/peminjaman/kembalikan/{id}', [MyController::class, 'kembalikanPeminjaman']);

Route::get('/datauser', [MyController::class, 'dataUser']);
Route::get('/user/{id}/edit', [MyController::class,'editUser'])->name('user.edit');
Route::put('/user/{id}', [MyController::class,'updateUser'])->name('user.update');
Route::get('/formfilter', [MyController::class, 'laporan']);


// ------------------- laporan masuk untuk buku peminjaman -----------------
Route::get('/laporanpeminjaman', [MyController::class, 'laporanPeminjaman']);
Route::get('/laporanpeminjaman/print', [MyController::class, 'printPeminjaman']);
Route::get('/laporanpeminjaman/pdf', [MyController::class, 'pdfPeminjaman']);
Route::get('/laporanpeminjaman/excel', [MyController::class, 'excelPeminjaman']);

// ------------------- laporan masuk untuk buku masuk ----------------------
Route::get('/laporanmasuk', [MyController::class, 'laporanMasuk']);
Route::get('/laporanmasuk/print', [MyController::class, 'printMasuk']);
Route::get('/laporanmasuk/pdf', [MyController::class, 'pdfMasuk']);
Route::get('/laporanmasuk/excel', [MyController::class, 'excelMasuk']);


// ------------------- KOLEKSI & RIWAYAT (untuk anggota) -------------------
Route::get('/koleksi', [MyController::class, 'koleksiBuku']);
Route::get('/riwayat', [MyController::class, 'riwayatPeminjaman']);
Route::post('/peminjaman/pinjam/{id}', [MyController::class, 'pinjamBuku']);
Route::post('/peminjaman/kembalikan/{id}', [MyController::class, 'kembalikanBukuAnggota']);