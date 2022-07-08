<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends AbstractModel
{
    use HasFactory;

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
