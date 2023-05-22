@extends("layouts.app")

@section("page-title", "Create")

@section("content")
   <h1 class="pb-5 fw-bold text-danger display-1">Benvenuto in Create</h1>
   <form method="POST" action="{{ route("admin.projects.store") }}">

      @csrf

      <div class="mb-2">
         <label for="url" class="form-label">Url:</label>
         <input type="text" class="form-control @error("url") is-invalid @enderror" id="url" name="url" value="{{old("url")}}">
      </div>
      @error("url")<div class="invalid-feedback">{{ $message }}</div>@enderror
      <div class="mb-2">
         <label for="titolo" class="form-label">Titolo:</label>
         <input type="text" class="form-control @error("titolo") is-invalid @enderror" id="titolo" name="titolo" value="{{old("titolo")}}">
      </div>
      @error("titolo")<div class="invalid-feedback">{{ $message }}</div>@enderror
      <div class="mb-2">
         <label for="data_creazione" class="form-label">Data_creazione:</label>
         <input type="text" class="form-control @error("data_creazione") is-invalid @enderror" id="data_creazione" name="data_creazione" value="{{old("data_creazione")}}">
      </div>
      @error("data_creazione")<div class="invalid-feedback">{{ $message }}</div>@enderror
      <div class="mb-2">
         <label for="descrizione" class="form-label">Descrizione:</label>
         <input type="text" class="form-control @error("descrizione") is-invalid @enderror" id="descrizione" name="descrizione" value="{{old("descrizione")}}">
      </div>
      @error("descrizione")<div class="invalid-feedback">{{ $message }}</div>@enderror

      <button type="submit" class="btn btn-primary">Salva</button>
   </form>
@endsection
