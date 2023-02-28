<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes')->withPivot('liked')->withTimestamps();
    }


    public function like()
    {
        $this->likes()->syncWithoutDetaching([auth()->id() => ['liked' => true]]);
    }

    public function hasLiked()
    {
        return $this->likes()->where('user_id', auth()->id())->exists();
    }

    protected $fillable = [
        'title',
        'path',
        'likesCounter'
    ];
}
