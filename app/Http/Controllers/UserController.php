<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->getAll();

        return view('users.index', compact('users'));
    }

    public function posts(User $user)
    {
        $posts = $this->userRepository->posts($user);

        return view('users.posts', compact('posts'));
    }

    public function destroy(User $user)
    {
        $this->userRepository->destroy($user);

        return redirect('/');
    }
}
