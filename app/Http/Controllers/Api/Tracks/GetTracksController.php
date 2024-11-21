<?php

namespace App\Http\Controllers\Api\Tracks;

use App\Http\Controllers\BaseController;
use App\Models\Track;
use Illuminate\Http\Request;

class GetTracksController extends BaseController
{
    public function __invoke(Request $request, Track $track)
    {
        try {
            $track = $track->load(['album', 'genre']);
            return $this->handleResponse($track, 'Track retrieved successfully');
        } catch (\Exception $e) {

            return $this->handleError($e->getMessage());
        }
    }
}
