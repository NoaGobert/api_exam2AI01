<?php

namespace App\Http\Controllers\Api\Genres;

use App\Http\Controllers\BaseController;
use App\Models\Genre;
use Illuminate\Http\Request;

class GetGenresController extends BaseController
{
    public function __invoke(Request $request, Genre $genre)
    {
        try {
            return $this->handleResponse($genre);
        } catch (\Exception $e) {

            return $this->handleError($e->getMessage());
        }
    }
}
