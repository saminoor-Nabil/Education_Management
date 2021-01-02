<?php
class UserTest extends \PHPUnit\Framework\TestCase{
    
    //These 3 are successfull in unit testing
    public function testReturnUserName(){
        $user = new \App\Model\User;
        $user->setUserName('saminoor');
        $this->assertEquals($user->getUserName(), 'saminoor');
    }
    public function testReturnCourseCode(){
        $user = new \App\Model\User;
		$user->setCourseCode('CSE470');
        $this->assertEquals($user->getCourseCode(), 'CSE470');
    }
    public function testReturnEmailAddress(){
		$user = new \App\Model\User;
		$user->setEmail('fahimabrar@gmail.com');
        $this->assertEquals($user->getEmail(), 'fahimabrar@gmail.com');
    }


    //These 2 are failed in unit testing
    
    public function testUserNameIsEmptyByDefault(){
        $user = new \App\Model\User;
        $user->setUserName('Fahim');
        $this->assertEquals($user->getUserName(), '');
    }
    public function testCourseCodeShouldCorrect(){
        $user = new \App\Model\User;
		$user->setCourseCode('CSE470');
        $this->assertEquals($user->getCourseCode(), 'CSE47');
    }

}
