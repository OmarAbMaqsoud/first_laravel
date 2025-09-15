<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'UserID';
    protected $fillable = ['Name', 'Email', 'Phone', 'Password'];

    public function profile()
    {
        return $this->hasOne(Profile::class, 'UserID', 'UserID');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'UserID', 'UserID');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'UserID', 'UserID');
    }
}
