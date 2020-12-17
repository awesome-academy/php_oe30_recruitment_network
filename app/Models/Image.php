<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function imageable()
    {
        return $this->morphTo();
    }

    protected $fillable = [
        'url',
        'imageable_id',
        'imageable_type',
        'type',
    ];
}