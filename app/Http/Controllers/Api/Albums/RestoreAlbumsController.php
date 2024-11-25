<?php

namespace App\Http\Controllers\Api\Albums;

use App\Http\Controllers\BaseController;
use App\Models\Album;
use Illuminate\Http\Request;

class RestoreAlbumsController extends BaseController
{
    public function __invoke(Request $request, $id)
    {
        try {
            $album = Album::withTrashed()->findOrFail($id);
            $album->restore();

            return $this->handleResponse($album, 'Album restored successfully');
        } catch (\Exception $e) {

            return $this->handleError($e->getMessage());
        }
    }
}
