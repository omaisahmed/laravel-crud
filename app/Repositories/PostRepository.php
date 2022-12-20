<?php 

namespace App\Repositories;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface{
    
    public function all()
    {
        return Post::all();
        // return $posts;
    //    return Post::latest()->paginate(5);

        // $postsearch = Post::search($request->all());

        //return view('posts',compact('posts','postpages','postsearch'));
    }
    public function store($request){
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->email = $request->email;
        $post->save();
    }
    public function edit($id){
       return Post::find($id);
    }
    public function update($request,$id){
        $post = Post::find($id);
        $post->title=$request->title;
        $post->body = $request->body;
        $post->update();
    }
    public function delete($id){
        Post::find($id)->delete();
    }
}