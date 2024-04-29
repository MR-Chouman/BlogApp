<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'content'
    ];

    public function post_category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function post_user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
