<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['text'];

    public function post(): HasOne
    {
        return $this->hasOne(Post::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
