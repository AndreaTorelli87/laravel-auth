@extends("layouts.app")

@section("page-title", "Index")

@section("content")

   <a href="{{route("admin.projects.create")}}" class="btn btn-primary mb-3">Crea nuovo Project</a>

   <div class="row">
      @foreach ($projects as $project)
      <div class="col-4">  
         <div class="card card-body text-center mb-4" style="height: 25rem;overflow: scroll;">
            <div class="d-flex justify-content-around mb-2">
               <a class="btn btn-success me-2" href="{{route("admin.projects.show", ["project" => $project->id])}}"><i class="fa-solid fa-eye"></i></i></a>
               <a class="btn btn-warning me-2" href="{{route("admin.projects.edit", ["project" => $project->id])}}"><i class="fa-solid fa-pen"></i></i></a>
               <form action="{{route("admin.projects.destroy", ["project" => $project->id])}}" method="POST">
                  @csrf
                  @method("DELETE")
                  <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
               </form>
            </div>
         {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <p class="card-text">Url: {{$project->url}}</p>
            <p class="card-text">Titolo: {{$project->titolo}}</p>
            <p class="card-text">Data_creazione: {{$project->data_creazione}}</p>
            <p class="card-text">Descrizione: {{$project->descrizione}}</p>
         </div>
      </div>
      @endforeach
   </div>
@endsection
