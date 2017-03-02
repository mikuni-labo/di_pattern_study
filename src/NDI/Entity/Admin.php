<?php
namespace NDI\Entity;

class Admin implements UserInterface
{
    public function __construct()
    {
        //
    }
    
    public function getRole()
    {
        return 'ADMIN';
    }

}
