<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsComment extends Model
{
    protected $fillable = [
        'article_news_id',
        'user_id',
        'message',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_news_comment', 'news_comment_id', 'user_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
