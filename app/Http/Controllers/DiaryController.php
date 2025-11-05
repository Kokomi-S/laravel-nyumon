<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;

class DiaryController extends Controller
{
    // 日記一覧表示
    public function index() {
        $diaries = Diary::all(); 
        return view('diary.index', compact('diaries'));
    }

    // 日記作成フォーム表示
    public function create() {
        return view('diary.create');
    }

    // 日記保存処理
    public function save(Request $request) {

        // バリデーションルールを指定して入力値を精査する
        $validated = $request->validate([
            'title' => 'required|max:20',    // title は入力必須、かつ 20文字以内 
            'date' => 'required|date',      // date は入力必須、かつ日付形式
            'body' => 'required',            // body は入力必須
        ]);

        // 精査済みのデータを利用する
        $date = $validated['date'];
        $title = $validated['title'];
        $body = $validated['body'];
        
        // 日記データを保存する
        $diary = new Diary();
        $diary->date = $date;
        $diary->title = $title;
        $diary->body = $body;
        $diary->save();

        return redirect()->route('diary.create');
    }

    // 日記詳細表示
    public function show($id) {
        $diary = Diary::findOrFail($id);
        return view('diary.show', compact('diary'));
    }
}
