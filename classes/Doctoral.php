<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Doctoral extends Eloquent
{

   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

   protected $fillable = [
        'faculty_id', 'degree_program',
        'yr_grad', 'name_of_school'
   ];

 }