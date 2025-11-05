<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;

class ApiXXXController extends Controller
{
    // APIで日記一覧を取得
    public function index() {
        $diaries = Diary::all();
        return response()->json($diaries);
    }
}

