<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\GenreResourse;
use App\Models\Genre;

class GenreController extends BaseApiController
{
    public function index()
    {
        return GenreResourse::collection(Genre::all());
    }

    public function show($id)
    {
        return new GenreResourse(Genre::findOrFail($id));
    }
}
