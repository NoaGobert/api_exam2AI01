<?php

namespace App\Http\Controllers\Api\Artists;

use App\Http\Controllers\BaseController;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreateArtistsController extends BaseController
{
    public function __invoke(Request $request)
    {
        try {
            $input = $request->all();

            $validator = Validator::make($input, [
                'name' => 'required',
            ]);

            if ($validator->fails()) {
                return $this->handleError(errors: $validator->errors());
            }

            $artist =  Artist::create($input);

            return $this->handleResponse($artist, 'Artist created successfully');
        } catch (\Exception $e) {
            return $this->handleError($e->getMessage());
        }
    }
}
