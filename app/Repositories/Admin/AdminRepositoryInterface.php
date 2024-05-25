<?php

namespace App\Repositories\Admin;

interface AdminRepositoryInterface
{
    public function store($data);

    public function update($data, $id);

    public function delete($id);

    public function get($id);

    public function all();
}
