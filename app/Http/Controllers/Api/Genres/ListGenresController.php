<?php

namespace App\Http\Controllers\Api\Genres;

use App\Http\Controllers\BaseController;
use App\Models\Genre;
use Illuminate\Http\Request;

class ListGenresController extends BaseController
{
    public function __invoke(Request $request)
    {
        try {
            $genres = Genre::withTrashed()->with('tracks')->get();

            return $this->handleResponse($genres, 'List of genres retrieved successfully');
        } catch (\Exception $e) {

            return $this->handleError($e->getMessage());
        }
    }
}
