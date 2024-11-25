<?php

namespace App\Http\Controllers\Api\Albums;

use App\Http\Controllers\BaseController;
use App\Models\Album;
use Illuminate\Http\Request;

class ListAlbumsController extends BaseController
{
    public function __invoke(Request $request)
    {
        try {
            $albums = Album::withTrashed()->with('tracks', 'artist')->get();
            return $this->handleResponse($albums);
        } catch (\Exception $e) {
            return $this->handleError($e->getMessage());
        }
    }
}
