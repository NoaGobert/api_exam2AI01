<?php

namespace App\Http\Controllers\Api\Artists;

use App\Http\Controllers\BaseController;
use App\Models\Artist;
use Illuminate\Http\Request;

class RestoreArtistsController extends BaseController
{
    public function __invoke(Request $request, Artist $artist)
    {
        try {
            $artist->restore();

            return $this->handleResponse($artist, 'Artist restored successfully');
        } catch (\Exception $e) {

            return $this->handleError($e->getMessage());
        }
    }
}
