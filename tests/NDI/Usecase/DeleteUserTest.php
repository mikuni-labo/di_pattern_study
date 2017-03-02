<?php
namespace NDI\Usecase;

use NDI\App\Container;
use NDI\Entity\User;
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
//         $container->addContainer('saveuser', new ConcreteUserRepository);
//         print_r($container);
        
//         $User       = new User();
//         $SaveUser   = new DeleteUserService();
//         $Repository = new ConcreteUserRepository();
        
//         $phake      = \Phake::mock(UserRepositoryInterface::class);
//         \Phake::when($phake)->save();
//         \Phake::when($mock)->getUser()->thenReturn($User);// リターンを定義
        
//         $SaveUser->save($User, $phake);
        
//         \Phake::verify($phake, \Phake::times(1) );
        
//         $this->assertEquals($User, $phake->getUser());
    }
    
}