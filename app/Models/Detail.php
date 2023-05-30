<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public function Book(){
        return $this->belongsTo(Book::class);
    }

    use HasFactory;
}
