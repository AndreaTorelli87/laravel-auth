@extends("layouts.app")

@section("page-title", "Show")

@section("content")
   <h1 class="fw-bold text-danger display-1">Benvenuto in show</h1>
   <a href="{{route("admin.projects.index")}}" class="btn btn-primary mb-3">Torna alla lista</a>
   <div class="card align-items-center p-3">
      <p class="card-text">Url: {{$project->url}}</p>
      <p class="card-text">Titolo: {{$project->titolo}}</p>
      <p class="card-text">Data_creazione: {{$project->data_creazione}}</p>
      <p class="card-text">Descrizione: {{$project->descrizione}}</p>
   </div>   
@endsection
