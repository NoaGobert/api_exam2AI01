<?php

namespace App\Http\Controllers\Api\Artists;

use App\Http\Controllers\BaseController;
use App\Models\Artist;
use Illuminate\Http\Request;

class DeleteArtistsController extends BaseController
{
    public function __invoke(Request $request, Artist $artist)
    {
        try {
            $artist->delete();
            return $this->handleResponse($artist, 'Artist deleted successfully');
        } catch (\Exception $e) {
            return $this->handleError($e->getMessage());
        }
    }
}
