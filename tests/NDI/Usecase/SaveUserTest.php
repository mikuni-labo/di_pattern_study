<?php
namespace NDI\Usecase;

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
		$User       = new User();
		$SaveUser   = new SaveUserService();
		$Repository = new ConcreteUserRepository();
		
		$SaveUser->save($User, $Repository);
		
		$this->assertEquals($User, $Repository->getUser());
	}
}