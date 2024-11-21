<?php

namespace App\Http\Controllers\Api\Albums;

use App\Http\Controllers\BaseController;
use App\Models\Album;
use Illuminate\Http\Request;

class DeleteAlbumsController extends BaseController
{
    public function __invoke(Request $request, Album $album)
    {
        try {
            $album->delete();
            return $this->handleResponse($album, 'Album deleted successfully');
        } catch (\Exception $e) {

            return $this->handleError($e->getMessage());
        }
    }
}
