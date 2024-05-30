<?php

namespace App\Services\Admin;

use App\Repositories\Admin\AdminRepositoryInterface;

class AdminService
{
    private $adminRepository;

    public function __construct(AdminRepositoryInterface $adminRepository){
        $this->adminRepository = $adminRepository;
    }

    public function store($data)
    {
        $this->adminRepository->store($data);
    }
    public function findByID($id){
        // return $this->adminRepository->find($id);
    }
    public function update($id, $data){}

    public function delete()
    {
        // $this->adminRepository->delete();
    }
}
