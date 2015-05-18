<?php
namespace tests\codeception\frontend\unit\models;
use tests\codeception\frontend\unit\DbTestCase;
class Session2Test extends DbTestCase
{
    public function testSession()
    {
        $this->assertFalse(\Yii::$app->session->has('ololo'));
    }
}
