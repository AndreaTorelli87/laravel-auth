<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
   public function run()
   {
      $projects = config("projects");

      foreach ($projects as $project) {
         $newProject = new Project();
         
         $newProject->url = $project["url"];
         $newProject->titolo = $project["titolo"];
         $newProject->data_creazione = $project["data_creazione"];
         $newProject->descrizione = $project["descrizione"];
         $newProject->save();
      }
   }
}
