<?php

use Illuminate\Support\Facades\Route;


Route::get('/artists', \App\Http\Controllers\Api\Artists\ListArtistsController::class);
Route::get('/artists/{artist}', \App\Http\Controllers\Api\Artists\GetArtistsController::class);
Route::post('/artists', \App\Http\Controllers\Api\Artists\CreateArtistsController::class);
Route::put('/artists/{artist}', \App\Http\Controllers\Api\Artists\UpdateArtistsController::class);
Route::delete('/artists/{artist}', \App\Http\Controllers\Api\Artists\DeleteArtistsController::class);
Route::get('/artists/{id}/restore', \App\Http\Controllers\Api\Artists\RestoreArtistsController::class);

Route::get('/albums', \App\Http\Controllers\Api\Albums\ListAlbumsController::class);
Route::get('/albums/{album}', \App\Http\Controllers\Api\Albums\GetAlbumsController::class);
Route::post('/albums', \App\Http\Controllers\Api\Albums\CreateAlbumsController::class);
Route::put('/albums/{album}', \App\Http\Controllers\Api\Albums\UpdateAlbumsController::class);
Route::delete('/albums/{album}', \App\Http\Controllers\Api\Albums\DeleteAlbumsController::class);
Route::get('/albums/{id}/restore', \App\Http\Controllers\Api\Albums\RestoreAlbumsController::class);

Route::get('/tracks', \App\Http\Controllers\Api\Tracks\ListTracksController::class);
Route::get('/tracks/{track}', \App\Http\Controllers\Api\Tracks\GetTracksController::class);
Route::post('/tracks', \App\Http\Controllers\Api\Tracks\CreateTracksController::class);
Route::put('/tracks/{track}', \App\Http\Controllers\Api\Tracks\UpdateTracksController::class);
Route::delete('/tracks/{track}', \App\Http\Controllers\Api\Tracks\DeleteTracksController::class);
Route::get('/tracks/{id}/restore', \App\Http\Controllers\Api\Tracks\RestoreTracksController::class);

// genres
Route::get('/genres', \App\Http\Controllers\Api\Genres\ListGenresController::class);
Route::get('/genres/{genre}', \App\Http\Controllers\Api\Genres\GetGenresController::class);
Route::post('/genres', \App\Http\Controllers\Api\Genres\CreateGenresController::class);
Route::put('/genres/{genre}', \App\Http\Controllers\Api\Genres\UpdateGenresController::class);
Route::delete('/genres/{genre}', \App\Http\Controllers\Api\Genres\DeleteGenresController::class);
Route::get('/genres/{id}/restore', \App\Http\Controllers\Api\Genres\RestoreGenresController::class);
