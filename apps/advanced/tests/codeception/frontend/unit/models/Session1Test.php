<?php
namespace tests\codeception\frontend\unit\models;
use tests\codeception\frontend\unit\DbTestCase;
class Session1Test extends DbTestCase
{
    public function testSession()
    {
        \Yii::$app->session->set('ololo', 'trololo');
        $this->assertTrue(\Yii::$app->session->has('ololo'));
        \Yii::$app->session->close();
    }
}
