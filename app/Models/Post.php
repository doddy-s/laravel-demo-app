<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'content',
        'media',
        'user_id',
        'community_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function comments() 
    {
        return $this->hasMany(Comment::class);
    }

    public function likes() 
    {
        return $this->hasMany(Like::class);
    }

    public function communities()
    {
        return $this->belongsTo(Community::class);
    }
}
