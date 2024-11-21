<?php

namespace App\Http\Controllers\Api\Albums;

use App\Http\Controllers\BaseController;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UpdateAlbumsController extends BaseController
{
    public function __invoke(Request $request, Album $album)
    {
        try {
            $input = $request->all();

            Validator::make($input, [
                'name' => 'required',
                'artist_id' => 'required|exists:artists,id',
            ])->validate();

            $album->name = $input['name'];
            $album->artist_id = $input['artist_id'];
            $album->save();

            return $this->handleResponse($album, 'Album updated successfully');
        } catch (\Exception $e) {

            return $this->handleError($e->getMessage());
        }
    }
}
