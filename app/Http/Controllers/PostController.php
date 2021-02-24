<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;
use App\Repositories\PostRepositoryInterface;

class PostController extends Controller
{
    protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->getAll();
        
        return view("posts.index", ["posts" => $posts]);
    }

    public function show($id)
    {
        $post = $this->postRepository->show($id);

        return view('posts.show', ['post' => $post]);
    }

    public static function convertDate($date)
    {
        return Carbon::parse($date)->format('m/d/Y');
    }

    public function create()
    {
        $users = $this->postRepository->getUsers();

        return view('posts.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(Post::$rules);

        $this->postRepository->store($request);

        return redirect("/")
            ->with('created', 'Post Created');
    }

    public function edit($id)
    {
        $post = $this->postRepository->edit($id);

        $users = $this->postRepository->getUsers();

        return view('posts.edit', ['post' => $post, 'users' => $users]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate(Post::$rules);

        $this->postRepository->update($request, $id);

        return redirect("/post/" . $id)
            ->with('updated', 'Post Updated');
    }

    public function destroy(Request $request, $id)
    {
        $this->postRepository->destroy($request, $id);

        return redirect("/")
            ->with('deleted', 'Post Deleted'); 
    }
}
