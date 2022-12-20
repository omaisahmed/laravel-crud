<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\PostRepositoryInterface;


class PostController extends Controller
{
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function addPost()
    {
        return view('add-post');
    }

    public function createPost(Request $request)
    {

        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
            'email' => 'required',
            
        ]);

        $this->postRepository->store($request);
        return back()->with('post_created','Post has been created Successfully!');
    }

    public function updatePost($id){
        $post = $this->postRepository->edit($id);
        return view('update-post',compact('post'));
    }

    public function postUpdated(Request $request,$id){
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        $this->postRepository->update($request,$id);
        return redirect('posts')->with('post_updated','Post has been updated Successfully!');
    }

    public function getPost(Request $request)
    {
        $posts = $this->postRepository->all();
        // return $posts;
        $postpages = Post::latest()->paginate(5);

        $postsearch = Post::search($request->all());

        return view('posts',compact('posts','postpages','postsearch'));
    }

    public function getPostById($id)
    {
        $post = Post::where('id',$id)->first();
        return view('single-post',compact('post'));
    }
    public function deletePost($id)
    {
        $this->postRepository->delete($id);
        return back()->with('post_deleted','Post Deleted Successfully!');
    }

  
    public function searchPost(Request $request, Post $post){

        $search = Post::query();
        $title = $request->title;
        $body = $request->body;

        if ($title) {
             $search->where('title','LIKE','%'.$title.'%');
        }
        if ($body) {
            $search->where('body','LIKE','%'.$body.'%');
       }

       $data = [
        'title' => $title,
        'body' => $body,
        'search' => $search->latest()->simplePaginate(20),
    ];

        return view('search-index',$data);

    }
}

    