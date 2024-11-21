<?php

namespace App\Http\Controllers\Api\Genres;

use App\Http\Controllers\BaseController;
use App\Models\Genre;
use Illuminate\Http\Request;

class DeleteGenresController extends BaseController
{
    public function __invoke(Request $request, Genre $genre)
    {
        try {
            $genre->delete();
            return $this->handleResponse($genre, 'Genre deleted successfully');
        } catch (\Exception $e) {

            return $this->handleError($e->getMessage());
        }
    }
}
