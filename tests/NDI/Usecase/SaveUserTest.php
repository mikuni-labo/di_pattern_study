<?php
namespace NDI\Usecase;

use NDI\Entity\User;
use NDI\Repository\SaveUserRepository;

class SaveUserTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function ユーザ作成()
	{
		$User = new User();
		$SaveUser = new SaveUser();
		$SaveUserRepository = new SaveUserRepository();
		
		$SaveUser->save($User, $SaveUserRepository);
		
// 		$this->assertFalse(false);
		$this->assertTrue(true);
// 		$this->assertEquals(true, true);
	}
}