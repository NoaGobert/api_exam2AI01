<?php

namespace App\Http\Controllers\Api\Artists;

use App\Http\Controllers\BaseController;
use App\Models\Artist;
use Illuminate\Http\Request;

class ListArtistsController extends BaseController
{
    public function __invoke(Request $request)
    {
        try {

            $artists = Artist::withTrashed()->with('albums.tracks')->get();

            return $this->handleResponse($artists);
        } catch (\Exception $e) {

            return $this->handleError($e->getMessage());
        }
    }
}
