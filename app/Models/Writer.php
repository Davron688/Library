<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    protected $fillable = ['name','biography','image' , 'birthdate' , 'gender'];
}
