<?php 

namespace App\Repositories;

use App\Models\Post;
use App\Models\User;

class PostRepository implements PostRepositoryInterface
{
    public function getAll()
    {
        return Post::all();
    }

    public function show($id)
    {
        return Post::findOrFail($id);
    }

    public function getUsers()
    {
        return User::all();
    }

    public function store($request)
    {
        $post = new Post;

        $post->title = $request->title;
        $post->user_id = $request->user;
        $post->body = $request->body;

        $post->save();

        return $post;
    }

    public function edit($id)
    {
        return Post::findOrFail($id);
    }

    public function update($request, $id)
    {
        $post = Post::findOrFail($id);

        $post->title = $request->title;
        $post->user_id = $request->user;
        $post->body = $request->body;

        $post->update();

        return $post;
    }

    public function destroy($request, $id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return $post;
    }
}