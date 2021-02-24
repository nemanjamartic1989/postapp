<?php 

namespace App\Repositories;

interface PostRepositoryInterface
{
    public function getAll();

    public function show($id);

    public function getUsers();

    public function store($request);

    public function edit($id);

    public function update($request, $id);

    public function destroy($request, $id);
}