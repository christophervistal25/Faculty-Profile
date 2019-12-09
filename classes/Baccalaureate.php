<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Baccalaureate extends Eloquent
{
   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

   protected $fillable = [
        'faculty_id', 'course', 'major',
        'yr_grad', 'name_of_school'
   ];

 }