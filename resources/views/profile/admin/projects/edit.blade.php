@extends("layouts.app")

@section("page-title", "Edit")

@section("content")
   <h1 class="pb-5 fw-bold text-danger display-1">Benvenuto in Edit</h1>
   <form method="POST" action="{{ route("admin.projects.update", ["project" => $project->id]) }}">

      @csrf
      @method("PUT")

      <div class="mb-2">
         <label for="url" class="form-label">Url:</label>
         <input type="text" class="form-control @error("url") is-invalid @enderror" id="url" value="{{old("url", $project->url)}}" name="url">
         @error("url")<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="mb-2">
         <label for="titolo" class="form-label">Titolo:</label>
         <input type="text" class="form-control @error("titolo") is-invalid @enderror" id="titolo" value="{{old("titolo", $project->titolo)}}" name="titolo">
         @error("titolo")<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="mb-2">
         <label for="data_creazione" class="form-label">Data_creazione:</label>
         <input type="text" class="form-control @error("data_creazione") is-invalid @enderror" id="data_creazione" value="{{old("data_creazione", $project->data_creazione)}}" name="data_creazione">
         @error("data_creazione")<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="mb-2">
         <label for="descrizione" class="form-label">Descrizione:</label>
         <input type="text" class="form-control @error("descrizione") is-invalid @enderror" id="descrizione" value="{{old("descrizione", $project->descrizione)}}" name="descrizione">
         @error("descrizione")<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      
      <button type="submit" class="btn btn-primary">Salva</button>
   </form>
@endsection
