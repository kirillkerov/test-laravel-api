<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Genre extends AbstractModel
{
    use HasFactory;

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }
}
