<?php

namespace App\Repositories\Admin;

use App\Models\Admin;

class AdminRepository implements AdminRepositoryInterface
{
    private $adminModel;
    public function __construct(Admin $adminModel)
    {
        $this->adminModel = $adminModel;
    }

    public function store($data)
    {
        return $this->adminModel->insert([
            'firstName' => $data['first_name'],
            'lastName' => $data['last_name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'update_at' => now(),
        ]);
    }

    public function update($data, $id)
    {
        return $this->adminModel->where('id', $id)->update([
            'firstName' => $data['first_name'],
            'lastName' => $data['last_name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
    }

    public function delete($id){
        return $this->adminModel->where('id', $id)->delete();
    }

    public function get($id){
        return $this->adminModel->where('id', $id)->first();

    }

    public function all()
    {
        return $this->adminModel->get();
    }
}
