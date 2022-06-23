<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table="posts";

    public static function search($request)
{
    $postsearch = Post::query();

    if (isset($request->search)) {
        $postsearch = $postsearch->where('title', 'like', '%'.$request['search'].'%');
    }

    
}

}
