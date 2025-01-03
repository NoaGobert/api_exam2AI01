<?php

namespace App\Http\Controllers\Api\Albums;

use App\Http\Controllers\BaseController;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreateAlbumsController extends BaseController
{
    public function __invoke(Request $request)
    {
        try {
            $input = $request->all();

            $validator = Validator::make($input, [
                'title' => 'required',
                'artist_id' => 'required',
            ]);

            if ($validator->fails()) {
                return $this->handleError(errors: $validator->errors());
            }

            $album =  Album::create($input);

            return $this->handleResponse($album, 'Album created successfully');
        } catch (\Exception $e) {
            return $this->handleError($e->getMessage());
        }
    }
}
