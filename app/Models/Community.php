<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['name', 'description'];

    protected $hidden = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsToMany(User::class, 'members');
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
