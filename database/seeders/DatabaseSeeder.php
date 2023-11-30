<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Community;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Community::factory(10)->create()->each(function ($community) {
            User::factory(4)->create()->each(function ($user) use ($community) {
                $user->community()->attach($community->id);
                Post::factory(5)->create([
                    'user_id' => $user->id,
                    'community_id' => $community->id,
                ])->each(function ($post) use ($user) {
                    Comment::factory(3)->create([
                        'user_id' => $user->id,
                        'post_id' => $post->id,
                    ]);
                    Like::factory(3)->create([
                        'user_id' => $user->id,
                        'post_id' => $post->id,
                    ]);
                });
            });
        });
    }
}
