<?php 

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function getAll();

    public function posts($user);

    public function destroy($user);
}