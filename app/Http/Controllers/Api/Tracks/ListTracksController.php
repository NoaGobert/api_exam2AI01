<?php

namespace App\Http\Controllers\Api\Tracks;

use App\Http\Controllers\BaseController;
use App\Models\Track;
use Illuminate\Http\Request;

class ListTracksController extends BaseController
{
    public function __invoke(Request $request)
    {
        try {
            $tracks = Track::withTrashed()->with(['album', 'genre'])->get();

            return $this->handleResponse($tracks, 'List of tracks retrieved successfully');
        } catch (\Exception $e) {

            return $this->handleError($e->getMessage());
        }
    }
}
