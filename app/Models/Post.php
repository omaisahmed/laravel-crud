<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    // protected $table="posts";

    protected $fillable = [
        'title',
        'body'
    ];

    public static function search($request)
{
    $postsearch = Post::query();

    if (isset($request->search)) {
        $postsearch = $postsearch->where('title', 'like', '%'.$request['search'].'%');
    }

    
}

public function user(){
    return $this->belongsTo(User::class);
}

}
