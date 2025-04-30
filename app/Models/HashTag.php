<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
    
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
