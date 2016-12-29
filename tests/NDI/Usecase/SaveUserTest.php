<?php
namespace NDI\Usecase;

use NDI\App\Container;
use NDI\Entity\User;
use NDI\Repository\ConcreteUserRepository;
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
// 		$container = new Container;
// 		$container->addContainer('saveuser', new ConcreteUserRepository);
// 		print_r($container);
		
		
		$User       = new User();
		$SaveUser   = new SaveUserService();
		$Repository = new ConcreteUserRepository();
		
		$SaveUser->save($User, $Repository);
		
		$this->assertEquals($User, $Repository->getUser());
	}
}