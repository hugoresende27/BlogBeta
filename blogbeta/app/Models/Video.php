<?php

namespace App\Models;

use App\Models\Series;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;

    /**
     * Get the series that owns the Video
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function series()//: BelongsTo
    {
        return $this->belongsTo(Series::class);
    }


    public function watchable()//: BelongsTo
    {
        return $this->morphTo();
    }
}
