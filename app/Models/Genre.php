<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'description'])]
class Genre extends Model
{
    public function books(){
        $this->hasMany(Book::class);
    }
}
