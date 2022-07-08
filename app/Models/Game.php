<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends AbstractModel
{
    use HasFactory;

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function developer()
    {
        return $this->hasOne(Developer::class);
    }
}
