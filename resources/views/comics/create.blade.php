@extends("layout.app")

@section('content')
<div id="form_container">
    <h1>Inserisci IL tuo fumetto!</h1>
    <form action="{{route ('comics.store')}}" method="POST">
        <div class="mb-3">
          <label for="title" class="form-label">title</label>
          <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Inserisci Nome</div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Inserisci una descrizione</div>
          </div>
          <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Inserisci una foto</div>
          </div>
        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control" name="type" id="type" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Inserisci il genere</div>
          </div>
        <button type="submit" class="btn btn-primary">Inserisci</button>
      </form>
</div>

@endsection