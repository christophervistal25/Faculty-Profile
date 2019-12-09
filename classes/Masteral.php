<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Masteral extends Eloquent

{

   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

   protected $fillable = [
        'faculty_id', 'graduate_program',
        'major', 'yr_grad', 'name_of_school'
   ];

 }