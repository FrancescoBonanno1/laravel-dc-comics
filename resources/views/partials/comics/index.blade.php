@extends("layout.app")

@section("content")
   <h2>I nostri Articoli</h2>
    <ul>
        @foreach ($articoli as $item)
        <li>{{$item}}</li>
        @endforeach
    </ul>
@endsection