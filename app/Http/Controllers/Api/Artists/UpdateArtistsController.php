<?php

namespace App\Http\Controllers\Api\Artists;

use App\Http\Controllers\BaseController;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UpdateArtistsController extends BaseController
{
    public function __invoke(Request $request, Artist $artist)
    {
        try {
            $input = $request->all();

            Validator::make($input, [
                'name' => 'required',
            ])->validate();

            $artist->name = $input['name'];
            $artist->save();

            return $this->handleResponse($artist, 'Artist updated successfully');
        } catch (\Exception $e) {
            return $this->handleError($e->getMessage());
        }
    }
}
