<?php

namespace App\Repositories\Product;

interface ProductRepositoryInterface
{
    public function store($data);

    public function findByID($id);

    public function update($data, $id);

    public function getList();

    public function delete($id);
    // join, left join
}
