<?php
namespace NDI\Usecase;

use NDI\App\Container;
use NDI\Entity\User;
use NDI\Entity\Admin;
// use NDI\Repository\ConcreteUserRepository;
use NDI\Repository\UserRepositoryInterface;
use NDI\Service\DeleteUserService;

class DeleteUserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function ユーザ削除()
    {
        /**
         * サービスコンテナ生成
         */
//         $container = new Container;
//         $container->addContainer('delete.user', new ConcreteUserRepository);
        
        $User       = new User();
        $SaveUser   = new DeleteUserService();
//         $Repository = new ConcreteUserRepository();
        
        $phake  = \Phake::mock(UserRepositoryInterface::class);
        $result = \Phake::when($phake)->delete($User, $phake);
        
        \Phake::verify($phake, \Phake::times(1) );
        
//         $this->assertFalse($result);
    }
    
    /**
     * @test
     */
    public function 管理者以外はユーザを削除出来ない()
    {
        /**
         * サービスコンテナ生成
         */
//         $container = new Container;
//         $container->addContainer('delete.user', new ConcreteUserRepository);
        
        $Admin      = new Admin();
        $User       = new User();
        $SaveUser   = new DeleteUserService();
//         $Repository = new ConcreteUserRepository();
        
        $phake  = \Phake::mock(UserRepositoryInterface::class);
        $result = \Phake::when($phake)->delete($User, $phake, $Admin);
        
//         \Phake::verify($phake, \Phake::times(1) );
        
//         $this->assertFalse($result);
        $this->assertNotFalse($result);
    }

}
