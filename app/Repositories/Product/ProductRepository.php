<?php

namespace App\Repositories\Product;

use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    private $productModel;

    public function __construct(Product $productModel)
    {
        $this->productModel = $productModel;
    }

    public function store($data)
    {
        return $this->productModel->insertGetID($data);
    }

    public function findByID($id)
    {
        return $this->productModel->where('id', $id)->first();
    }

    public function update($data, $id)
    {
        return $this->productModel->where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->productModel->where('id', $id)->delete();
    }

    public function getList()
    {
        return $this->productModel->with(['createdBy'])->get();
    }
}
