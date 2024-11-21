<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Artist extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}