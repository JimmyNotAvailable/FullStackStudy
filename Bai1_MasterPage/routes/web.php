<?php

use App\Http\Controllers\StudyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home-admin', [StudyController::class, 'viewHomeAdmin']);

Route::get('/home-admin/danh-muc', [StudyController::class, 'viewDanhMuc']);

Route::get('/customer', [StudyController::class, 'viewHomeCustommer']);

Route::get('/customer/danh-muc-khach-hang', [StudyController::class, 'viewCustomerDetail']);
