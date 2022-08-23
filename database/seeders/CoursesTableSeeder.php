<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = array(
            array("id"=>1,"name"=>"Pourquoi l'analyse de données?","start_date"=>"2022-07-12","end_date"=>"2022-07-15"),
            array("id"=>2,"name"=>"Compétences générales","start_date"=>"2022-07-12","end_date"=>"2022-09-30"),
            array("id"=>3,"name"=>"Analyse des données avec Excel","start_date"=>"2022-07-18","end_date"=>"2022-08-05"),
            array("id"=>4,"name"=>"Analyses Commerciales","start_date"=>"2022-08-05","end_date"=>"2022-09-30"),
            array("id"=>5,"name"=>"Gestion des données avec SQL","start_date"=>"2022-08-08","end_date"=>"2022-09-02"),
            array("id"=>6,"name"=>"Visualisation des données avec Power BI","start_date"=>"2022-09-05","end_date"=>"2022-09-23")
          );

          foreach ($courses as $key => $course) {
            Course::create($course);
          }
    }
}
