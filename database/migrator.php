<?php
require "../bootstrap.php";
use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('faculties', function ($table) {
       $table->increments('id');
       $table->string('name');
       $table->string('teaching');
       $table->string('position');
       $table->string('MI');
       $table->string('appt');
       $table->timestamps();
});

Capsule::schema()->create('baccalaureates', function ($table) {
       $table->increments('id');
       $table->integer('faculty_id');
       $table->string('course');
       $table->string('major');
       $table->string('yr_grad');
       $table->string('name_of_school');
       $table->timestamps();
});

Capsule::schema()->create('masterals', function ($table) {
       $table->increments('id');
       $table->integer('faculty_id');
       $table->string('graduate_program');
       $table->string('major');
       $table->string('yr_grad');
       $table->string('name_of_school');
       $table->timestamps();
});

Capsule::schema()->create('doctorals', function ($table) {
       $table->increments('id');
       $table->integer('faculty_id');
       $table->string('degree_program');
       $table->string('yr_grad');
       $table->string('name_of_school');
       $table->timestamps();
});