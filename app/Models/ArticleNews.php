<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ArticleNews extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'content',
        'is_published',
        'is_popular',
        'category_id',
        'user_id',
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function newsComments()
    {
        return $this->hasMany(NewsComment::class);
    }

    public function hashTags()
    {
        return $this->belongsToMany(HashTag::class, 'article_news_hash_tag', 'article_news_id', 'hash_tag_id');
    }
}
