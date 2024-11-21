<?php

namespace App\Http\Controllers\Api\Genres;

use App\Http\Controllers\BaseController;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreateGenresController extends BaseController
{
    public function __invoke(Request $request)
    {
        try {
            $input = $request->all();

            Validator::make($input, [
                'name' => 'required|string|unique:genres,name',
            ])->validate();

            $genre = Genre::create($input);

            return $this->handleResponse($genre, 'Genre created successfully');
        } catch (\Exception $e) {

            return $this->handleError($e->getMessage());
        }
    }
}
