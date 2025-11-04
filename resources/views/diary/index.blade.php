<div>
    @foreach ($diaries as $diary)
        <div>{{ $diary->date }}</div>
        <div>{{ $diary->title }}</div>
    @endforeach
</div>
