<?php
namespace NDI\Entity;

class User implements UserInterface
{
    public function __construct()
    {
        //
    }
    
    public function getRole()
    {
        return 'USER';
    }

}
