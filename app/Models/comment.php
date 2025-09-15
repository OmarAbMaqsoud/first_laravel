<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'CommentID';
    protected $fillable = ['Content', 'PostID', 'UserID'];

    public function post()
    {
        return $this->belongsTo(Post::class, 'PostID', 'PostID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID', 'UserID');
    }
}
