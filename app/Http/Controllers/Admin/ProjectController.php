<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
   public function home() {
      return view("home");
   }

   public function index()
   {
      $projects = Project::all();
      return view("profile.admin.projects.index", compact("projects"));
      // return view("profile.admin.projects.index");
   }

   public function create()
   {
      return view("profile.admin.projects.create");
   }

   public function store(StoreProjectRequest $request)
   {
      $form_data = $request->validated();
      $newProject = new Project();
      $newProject->fill($form_data);
      $newProject->save();
      return redirect()->route("admin.projects.show", ["project" => $newProject->id])->with("status", "Il nuovo project è stato aggiunto con successo!");
   }

   public function show(Project $project)
   {
      return view("profile.admin.projects.show", compact("project"));
   }

   public function edit(Project $project)
   {
      return view("profile.admin.projects.edit", compact("project"));
   }

   public function update(UpdateProjectRequest $request, Project $project)
   {
      $form_data = $request->all();
      $project->update($form_data);
      return redirect()->route("profile.admin.projects.show", ["project" => $project->id])->with("status", "Il project è stato aggiornato con successo!");
   }

   public function destroy(Project $project)
   {
      $project->delete();
      return redirect()->route("admin.projects.index");
   }
}
