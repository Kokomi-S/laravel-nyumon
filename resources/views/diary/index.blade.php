@foreach ($diaries as $diary)
<div>
    <a href="{{ route('diary.show', $diary) }}">{{ $diary->title }}</a>
    <a href="{{ route('diary.show', $diary) }}">{{ $diary->date }}</a>
</div>
@endforeach