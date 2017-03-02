<?php
namespace NDI\Repository;

Interface UserRepositoryInterface
{
    public function save($User);
    
    public function delete($User);

}
