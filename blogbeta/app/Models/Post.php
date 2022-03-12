<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the comments for the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * The tags that belong to the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()//: BelongsToMany
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    ///posts 
    ///tags ['family','personal','work']
    ///post_tag

    public function like($user = null)
    {

        $user = $user ? : auth()->user();

        return $this->likes()->attach($user);

    }
    public function likes()
    {
        return $this->belongsToMany(User::class);

    }

    //posts
     // id
     // title
     // body
    //users 
     // id

    //post_user
     //user_id
     //post_id
}

