<?php

namespace App\Http\Controllers\Api\Tracks;

use App\Http\Controllers\BaseController;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UpdateTracksController extends BaseController
{
    public function __invoke(Request $request, Track $track)
    {
        try {
            $input = $request->all();

            $validator = Validator::make($input, [
                'name' => 'required',
                'album_id' => 'required|exists:albums,id',
                'genre_id' => 'required|exists:genres,id',
            ]);

            if ($validator->fails()) {
                return $this->handleError(errors: $validator->errors());
            }

            $track->name = $input['name'];
            $track->album_id = $input['album_id'];
            $track->genre_id = $input['genre_id'];
            $track->save();

            return $this->handleResponse($track, 'Track updated successfully');
        } catch (\Exception $e) {

            return $this->handleError($e->getMessage());
        }
    }
}
