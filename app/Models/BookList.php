<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookList extends Model
{
    protected $table = 'booklists';
    protected $fillable = ['title','author','genre','year','image','file'];
}
