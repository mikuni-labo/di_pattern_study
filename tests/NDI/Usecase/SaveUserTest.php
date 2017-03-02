<?php
namespace NDI\Usecase;

use NDI\App\Container;
use NDI\Entity\User;
// use NDI\Repository\ConcreteUserRepository;
use NDI\Repository\UserRepositoryInterface;
use NDI\Service\SaveUserService;

class SaveUserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function ユーザ作成(/* Container $container, User $User, SaveUser $SaveUser, ConcreteUserRepository $Repository */)
    {
        /**
         * サービスコンテナ生成
         */
//         $container = new Container;
//         $container->addContainer('save.user', new ConcreteUserRepository);
//         print_r($container);
        
        $User       = new User();
        $SaveUser   = new SaveUserService();
//         $Repository = new ConcreteUserRepository();
        
        $phake      = \Phake::mock(UserRepositoryInterface::class);
//         \Phake::when($phake)->save();
//         \Phake::when($mock)->getUser()->thenReturn($User);// リターンを定義
        
        $SaveUser->save($User, $phake);
        
        \Phake::verify($phake, \Phake::times(1) );
        
//         $this->assertEquals($User, $phake->getUser());
    }
    
}
