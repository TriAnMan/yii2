<?php

namespace tests\codeception\frontend\unit\models;

use tests\codeception\frontend\unit\DbTestCase;
use common\models\User;

class LoginTest extends DbTestCase
{


    public function testLogin()
    {
        // $this->assertEquals('', session_id());
        // \Yii::$app->user->login(User::findOne(['id'=>'1']));
        // $this->assertNotEmpty(session_id());
    }

    public function testSession()
    {
        // $this->assertEquals('', session_id());
    }
}