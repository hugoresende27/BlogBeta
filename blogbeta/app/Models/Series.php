<?php

namespace App\Models;

use App\Models\Video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Series extends Model
{
    use HasFactory;

    /**
     * Get all of the videos for the Series
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function videos()//: HasMany
    {
        return $this->morphMany(Video::class, 'watchable');
    }
}
