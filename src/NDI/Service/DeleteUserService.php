<?php
namespace NDI\Service;

use NDI\Entity\User;
use NDI\Entity\Admin;
use NDI\Entity\UserInterface;
use NDI\Repository\UserRepositoryInterface;

class DeleteUserService
{
    public function delete(User $User, UserRepositoryInterface $Repository, UserInterface $Operator)
    {
        if( ! $Operator->getRole() !== 'ADMIN' )
        {
            // ここで例外を投げる
        }

        return $Repository->delete($User);
    }

}
