<?php

namespace App\Http\Controllers\Api\Tracks;

use App\Http\Controllers\BaseController;
use App\Models\Track;
use Illuminate\Http\Request;

class RestoreTracksController extends BaseController
{
    public function __invoke(Request $request, Track $track)
    {
        try {
            $track->restore();

            return $this->handleResponse($track, 'Track restored successfully');
        } catch (\Exception $e) {

            return $this->handleError($e->getMessage());
        }
    }
}
