<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliation extends Model
{
    use HasFactory;

  
    /**
        * Get all of the posts for the Affiliation
        *
        * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
        */
    public function posts()//: HasManyThrough
    {
        return $this->hasManyThrough(Post::class, User::class);
    }
    
}
