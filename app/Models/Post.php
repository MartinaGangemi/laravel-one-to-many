<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = ['title', 'slug','content', 'img'];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

