<?php

use app\models\UserRecord;
use yii\base\Security;

class PasswordHasherTest extends \Codeception\Test\Unit
{
    /**
     * @var \FunctionalTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testPasswordIsHash()
    {
        $my_password='qwas123';
        $user_record_local = new UserRecord();
        $user_record_local->setTestUser();

        $user_record_local->setPassword($my_password);
        $user_record_local->save();

        $user_record_found = UserRecord::findOne($user_record_local->id);

        $this->assertInstanceOf(get_class($user_record_local),$user_record_found);
        $security = new Security();
        $this->assertTrue($security->validatePassword(
           $my_password,
           $user_record_found->passhash
        ));
    }

    public function testPasswordIsNotRehashed()//Проверка что пароль не хешируется второй раз
    {
        $my_password='qwas123';
        $user_record_local = new UserRecord();
        $user_record_local->setTestUser();

        $user_record_local->setPassword($my_password);
        $user_record_local->save();

        $first_hash = $user_record_local->passhash;

        $user_record_local->name .=mt_rand(1,9);

        $user_record_local->save();

        $this->assertEquals($first_hash,$user_record_local->passhash);

        $user_record_found = UserRecord::findOne($user_record_local->id);
        $this->assertEquals($first_hash,$user_record_found->passhash);

    }
}