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

    protected $hidden = [
        'user_id',
        'community_id',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comment() 
    {
        return $this->hasMany(Comment::class);
    }

    public function like() 
    {
        return $this->hasMany(Like::class);
    }

    public function community()
    {
        return $this->belongsTo(Community::class);
    }
}
