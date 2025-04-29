<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HashTag extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_trending',
    ];

    public function articleNews()
    {
        return $this->belongsToMany(ArticleNews::class, 'article_news_hash_tag', 'hash_tag_id', 'article_news_id');
    }
}
