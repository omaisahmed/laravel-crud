<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()->count(50)->create();

        // factory(Post::class, 100)->create();

        // for($i=1; $i<100; $i++){
        //     Post::create([
        //         'title' => 'Lorem ipsum seeder example '.$i,
        //         'body' => 'Lorem Ipsum typesetting industry. Lorem Ipsum seeder example '.$i,
        //     ]);
        // }
    }
}
