<?php

namespace App\Http\Controllers\Api\Albums;

use App\Http\Controllers\BaseController;
use App\Models\Album;
use Illuminate\Http\Request;

class GetAlbumsController extends BaseController
{
    public function __invoke(Request $request, Album $album)
    {
        try {
            $album = $album->load(['artist', 'tracks']);

            return $this->handleResponse($album);
        } catch (\Exception $e) {
            return $this->handleError($e->getMessage());
        }
    }
}
