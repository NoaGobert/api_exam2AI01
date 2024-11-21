<?php

use App\Http\Controllers\Api\Albums\CreateAlbumsController;
use App\Http\Controllers\Api\Albums\DeleteAlbumsController;
use App\Http\Controllers\Api\Albums\GetAlbumsController;
use App\Http\Controllers\Api\Albums\GetAlbumTracksController;
use App\Http\Controllers\Api\Albums\ListAlbumsController;
use App\Http\Controllers\Api\Albums\RestoreAlbumsController;
use App\Http\Controllers\Api\Albums\UpdateAlbumsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Artists\CreateArtistsController;
use App\Http\Controllers\Api\Artists\DeleteArtistsController;
use App\Http\Controllers\Api\Artists\GetArtistsController;
use App\Http\Controllers\Api\Artists\ListArtistsController;
use App\Http\Controllers\Api\Artists\RestoreArtistsController;
use App\Http\Controllers\Api\Artists\UpdateArtistsController;
use App\Http\Controllers\Api\Genres\CreateGenresController;
use App\Http\Controllers\Api\Genres\DeleteGenresController;
use App\Http\Controllers\Api\Genres\GetGenresController;
use App\Http\Controllers\Api\Genres\ListGenresController;
use App\Http\Controllers\Api\Genres\RestoreGenresController;
use App\Http\Controllers\Api\Genres\UpdateGenresController;
use App\Http\Controllers\Api\Tracks\CreateTracksController;
use App\Http\Controllers\Api\Tracks\DeleteTracksController;
use App\Http\Controllers\Api\Tracks\GetTracksController;
use App\Http\Controllers\Api\Tracks\ListTracksController;
use App\Http\Controllers\Api\Tracks\RestoreTracksController;
use App\Http\Controllers\Api\Tracks\UpdateTracksController;

// artists
Route::get('/artists', ListArtistsController::class);
Route::get('/artists/{artist}', GetArtistsController::class);
Route::post('/artists', CreateArtistsController::class);
Route::put('/artists/{artist}', UpdateArtistsController::class);
Route::delete('/artists/{artist}', DeleteArtistsController::class);
Route::get('/artists/{artist}/restore', RestoreArtistsController::class);

// albums
Route::get('/albums', ListAlbumsController::class);
Route::get('/albums/{album}', GetAlbumsController::class);
Route::post('/albums', CreateAlbumsController::class);
Route::put('/albums/{album}', UpdateAlbumsController::class);
Route::delete('/albums/{album}', DeleteAlbumsController::class);
Route::get('/albums/{album}/restore', RestoreAlbumsController::class);

// tracks
Route::get('/tracks', ListTracksController::class);
Route::get('/tracks/{track}', GetTracksController::class);
Route::post('/tracks', CreateTracksController::class);
Route::put('/tracks/{track}', UpdateTracksController::class);
Route::delete('/tracks/{track}', DeleteTracksController::class);
Route::get('/tracks/{track}/restore', RestoreTracksController::class);



// genres 
Route::get('/genres', ListGenresController::class);
Route::get('/genres/{genre}', GetGenresController::class);
Route::post('/genres', CreateGenresController::class);
Route::put('/genres/{genre}', UpdateGenresController::class);
Route::delete('/genres/{genre}', DeleteGenresController::class);
Route::get('/genres/{genre}/restore', RestoreGenresController::class);
