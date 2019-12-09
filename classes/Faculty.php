<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class Faculty extends Eloquent
{

   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

   protected $fillable = [
       'name', 'teaching', 'position',
       'MI','appt',
   ];

   public function baccalaureate()
   {
      return $this->hasOne('Baccalaureate');
   }

   public function masteral()
   {
      return $this->hasOne('Masteral');
   }

   public function doctoral()
   {
      return $this->hasOne('Doctoral');
   }

 }