<?php

namespace App\Http\Controllers\Api\Artists;

use App\Http\Controllers\BaseController;
use App\Models\Artist;
use Illuminate\Http\Request;

class GetArtistsController extends BaseController
{
    public function __invoke(Request $request, Artist $artist)
    {
        try {
            return $this->handleResponse($artist);
        } catch (\Exception $e) {

            return $this->handleError($e->getMessage());
        }
    }
}
