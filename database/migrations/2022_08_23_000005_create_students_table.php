<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('pob')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->boolean('is_active')->default(0);
            $table->string('profession')->nullable();
            $table->longText('observations')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
