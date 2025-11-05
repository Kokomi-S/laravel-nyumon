<!-- タイトルを H1 タグで表示する -->
<h1>{{ $diary->title }}</h1>

<!-- 内容と日付を表示する -->
<div>
  <a href="{{ route('diary.edit', $diary) }}">
    <button>編集</button>
  </a>
</div>
<div>
  <div>{{ $diary->body }}</div>
  <div>{{ $diary->date }}</div>
</div>