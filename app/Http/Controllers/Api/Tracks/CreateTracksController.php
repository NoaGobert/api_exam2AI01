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

            $validator = Validator::make($input, [
                'name' => 'required',
                'composer' => 'required',
                'milliseconds' => 'required',
                'bytes' => 'required',
                'unit_price' => 'required',
                'album_id' => 'required|exists:albums,id',
                'genre_id' => 'required|exists:genres,id',
            ]);

            if ($validator->fails()) {
                return $this->handleError(errors: $validator->errors());
            }


            $track = Track::create($input);

            return $this->handleResponse($track, 'Track created successfully');
        } catch (\Exception $e) {

            return $this->handleError($e->getMessage());
        }
    }
}
