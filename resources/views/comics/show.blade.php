@extends("layout.app")

@section("content")
<div id="card_comics">
    <div id="flexbox">
        <h1 id="singletitle">{{$ricerca->title}}</h1>
    </div>
    <img class="expo_img" src="{{$ricerca->thumb}}" alt="comics_photo">
    <p id="singledescr">{{$ricerca->description}}</p>
</div>
@endsection