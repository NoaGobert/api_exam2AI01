<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Track extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'composer',
        'milliseconds',
        'bytes',
        'unit_price',
        'album_id',
        'genre_id',
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
