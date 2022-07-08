<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Developer extends AbstractModel
{
    use HasFactory;

    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
