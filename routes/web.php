<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;

Route::get('/', function () {
    return view('welcome');
});

//日記一覧画面
Route::get('/diary', [DiaryController::class, 'index'])->name('diary.index');

//日記保存処理
Route::post('/diary', [DiaryController::class, 'save'])->name('diary.save');

//日記作成フォーム画面
Route::get('/diary/create', [DiaryController::class, 'create'])->name('diary.create');

// 日記単体ページ
Route::get('/diary/{id}',[DiaryController::class, 'show'])->name('diary.show');