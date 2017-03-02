<?php
namespace NDI\Service;

use NDI\Entity\User;
use NDI\Repository\UserRepositoryInterface;

class SaveUserService
{
    public function save(User $User, UserRepositoryInterface $Repository)
    {
        return $Repository->save($User);
    }
}