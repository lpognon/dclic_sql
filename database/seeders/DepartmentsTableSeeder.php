<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = array(
            array("id" => 1, "name" => "Ouest"),
            array("id" => 2, "name" => "Nord"),
            array("id" => 3, "name" => "Sud"),
            array("id" => 4, "name" => "Artibonite"),
            array("id" => 5, "name" => "Grand-Anse"),
            array("id" => 6, "name" => "Sud-Est"),
            array("id" => 7, "name" => "Centre"),
            array("id" => 8, "name" => "Nord-Ouest"),
            array("id" => 9, "name" => "Nord-Est"),
            array("id" => 10, "name" => "Nippes")
        );

        foreach ($departments as $key => $department) {
            Department::create($department);
        }
    }
}
