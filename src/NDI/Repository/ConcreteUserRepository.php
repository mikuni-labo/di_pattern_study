<?php
namespace NDI\Repository;

use NDI\Entity\User;

class ConcreteUserRepository implements UserRepositoryInterface
{
    private $User;
    
    public function __construct(User $User = null)
    {
        $this->user = $User ? $User : new User;
    }
    
    public function save(/*User */$User)
    {
        /**
         * TODO 保存処理の実装
         */
        
        $this->User = $User;
    }
    
    public function getUser()
    {
        return $this->User;
    }
}