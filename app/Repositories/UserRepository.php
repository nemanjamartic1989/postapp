<?php 

namespace App\Repositories;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function getAll()
    {
        return User::all();
    }

    public function posts($user)
    {
        return $user->post;
    }

    public function destroy($user)
    {
        return $user->delete();
    }
}