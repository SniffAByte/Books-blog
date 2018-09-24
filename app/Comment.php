<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function book()
    {
      return $this->belongsTo(\App\Book::class);
    }
}
