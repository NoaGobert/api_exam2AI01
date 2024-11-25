<?php

namespace App\Http\Controllers\Api\Genres;

use App\Http\Controllers\BaseController;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UpdateGenresController extends BaseController
{
    public function __invoke(Request $request, Genre $genre)
    {
        try {
            $input = $request->all();

            $validator = Validator::make($input, [
                'name' => 'required|string|unique:genres,name,' . $genre->id,
            ]);

            if ($validator->fails()) {
                return $this->handleError(errors: $validator->errors());
            }

            $genre->update($input);

            return $this->handleResponse($genre, 'Genre updated successfully');
        } catch (\Exception $e) {

            return $this->handleError($e->getMessage());
        }
    }
}
