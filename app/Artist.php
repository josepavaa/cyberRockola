<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
   public $timestamps = false;
   protected $table = 'artist';    
   protected $fillable = ['name'];    
}
