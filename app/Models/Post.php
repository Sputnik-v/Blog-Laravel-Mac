<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'description', 'image'];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }
}
