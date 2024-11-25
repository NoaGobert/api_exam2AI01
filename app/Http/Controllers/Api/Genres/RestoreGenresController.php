<?php

namespace App\Http\Controllers\Api\Genres;

use App\Http\Controllers\BaseController;
use App\Models\Genre;
use Illuminate\Http\Request;

class RestoreGenresController extends BaseController
{
    public function __invoke(Request $request, $id)
    {
        try {
            $genre = Genre::withTrashed()->findOrFail($id);
            $genre->restore();
            return $this->handleResponse($genre, 'Genre restored successfully');
        } catch (\Exception $e) {

            return $this->handleError($e->getMessage());
        }
    }
}
