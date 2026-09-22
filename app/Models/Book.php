<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['title', 'author', 'genre', 'resume', 'published_year'])]
class Book extends Model
{
    public function genre(){
        return $this->belongsTo(Genre::class);
    }
}
