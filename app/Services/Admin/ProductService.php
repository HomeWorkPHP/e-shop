<?php

namespace App\Services\Admin;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductService
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function store($data)
    {
        $dataStore = [
            'code' => $data['code'],
            'slug' => Str::slug($data['name']),
            'name' => $data['name'],
            'price' => $data['price'],
            'type' => $data['type'],
            'description' => $data['description'],
            'created_at' => now(),
            'updated_at' => now(),
            // 'admin_id' => 1,
            // Auth::user()->id
        ];
        return $this->productRepository->store($dataStore);
    }
    public function findByID($id){
        return $this->productRepository->findById($id);
    }
    public function update($data, $id)
    {
        $dataUpdate = [
            'code' => $data['code'],
            'slug' => Str::slug($data['name']),
            'name' => $data['name'],
            'price' => $data['price'],
            'type' => $data['type'],
            'description' => $data['description'],
            'updated_at' => now(),
        ];
        return $this->productRepository->update($dataUpdate, $id);
        // tra ve true or false
    }
    public function getall()
    {
        return $this->productRepository->getList();
    }
    public function delete($id)
    {
        return $this->productRepository->delete($id);
    }
}
