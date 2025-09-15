<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'PostID';
    protected $fillable = ['Title', 'Content', 'UserID'];

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID', 'UserID');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_category', 'PostID', 'CategoryID');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'PostID', 'TagID');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'PostID', 'PostID');
    }
}
