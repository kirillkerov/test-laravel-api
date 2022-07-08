<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\GameResourse;
use App\Models\Game;

class GameController extends BaseApiController
{
    public function index()
    {
        return GameResourse::collection(Game::with('genre')->get());
    }

    public function show($id)
    {
        return new GameResourse(Game::findOrFail($id));
    }
}
