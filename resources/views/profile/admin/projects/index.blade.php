@extends("layouts.app")

@section("page-title", "Index")

@section("content")

   <a href="{{route("admin.projects.create")}}" class="btn btn-primary mb-3">Crea nuovo Project</a>

   <div class="row">
      @foreach ($projects as $project)
      <div class="col-4">  
         <div class="flip-card">
            <div class="flip-card-inner position-relative">
               <div class="flip-card-front position-absolute bg-white">
                  <div class="card card-body text-center mb-4 bg-white" style="height: 25rem;overflow: scroll;">
                     
                  <img src="{{$project->url}}" alt="{{$project->titolo}}">
                  <h4 class="card-text">Titolo: {{$project->titolo}}</h4>
                  <h6 class="card-text">Data_creazione: {{$project->data_creazione}}</h6>
                  </div>
               </div>
               <div class="flip-card-back position-absolute overflow-scroll text-center p-2 bg-white">
                  <div class="d-flex justify-content-around mb-2">
                     <a class="btn btn-success me-2" href="{{route("admin.projects.show", ["project" => $project->id])}}"><i class="fa-solid fa-eye"></i></i></a>
                     <a class="btn btn-warning me-2" href="{{route("admin.projects.edit", ["project" => $project->id])}}"><i class="fa-solid fa-pen"></i></i></a>
                     <form action="{{route("admin.projects.destroy", ["project" => $project->id])}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                     </form>
                  </div>
                  <p class="card-text">Descrizione: {{$project->descrizione}}</p>
               </div>
            </div>
         </div>
      </div>
      @endforeach
   </div>
@endsection
