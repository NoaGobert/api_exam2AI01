<?php

namespace App\Http\Controllers\Api\Tracks;

use App\Http\Controllers\BaseController;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreateTracksController extends BaseController
{
    public function __invoke(Request $request)
    {
        try {
            $input = $request->all();

            Validator::make($input, [
                'name' => 'required',
                'composer' => 'required',
                'milliseconds' => 'required',
                'bytes' => 'required',
                'unit_price' => 'required',
                'album_id' => 'required|exists:albums,id',
                'genre_id' => 'required|exists:genres,id',
            ])->validate();

            $track = Track::create($input);

            return $this->handleResponse($track, 'Track created successfully');
        } catch (\Exception $e) {

            return $this->handleError($e->getMessage());
        }
    }
}
