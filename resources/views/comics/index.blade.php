@extends("layout.app")

@section("content")
   <h2>I nostri Articoli</h2>
   <section id="belt">
        @foreach ($articoli as $item)
        <div id="card_comics">
            <img class="expo_img" src="{{$item->thumb}}" alt="comics_photo">
            <div id="flexbox">
                <h3>{{$item->title}}</h3>
            </div>
        </div>
        @endforeach
    </section>     

    
@endsection