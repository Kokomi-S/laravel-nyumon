<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;

Route::get('/', function () {
    return view('welcome');
});

//日記一覧表示
Route::get('/diary', [DiaryController::class, 'index'])->name('diary.index');

//日記保存
Route::post('/diary', [DiaryController::class, 'save'])->name('diary.save');

//日記フォーム作成画面
Route::get('/diary/create', [DiaryController::class, 'create'])->name('diary.create');
