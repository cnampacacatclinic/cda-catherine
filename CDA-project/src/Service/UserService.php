<?php

namespace App\Service;

use App\Repository\UserRepository;

class UserService
{
    private $id;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function findAllUsers()
    {
        return $this->userRepository->findAll();
    }

    public function findOneUser($id)
    {
        return $this->userRepository->findBy(['id' => $id]);
    }
}