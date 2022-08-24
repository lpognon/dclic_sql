<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentGradesTable extends Migration
{
    public function up()
    {
        Schema::create('student_grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('score', 5, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
