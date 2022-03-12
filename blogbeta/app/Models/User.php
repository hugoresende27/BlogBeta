<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Profile;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //um user tem um profile
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    //user tem pontos xp
    public function xp()
    {
        return $this->hasOne(Xp::class);
    }

    //////////////////////////
    //a user can have many posts
    //a post can havy many comments
    //a project can have many tasks
    //a user can have many jobs
    //a user can have many achivements


 
    public function posts()
    {
        return $this->hasMany(Post::class);
    }


    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    
    public function achivements()
    {
        return $this->hasMany(Achivement::class);
    }
}
