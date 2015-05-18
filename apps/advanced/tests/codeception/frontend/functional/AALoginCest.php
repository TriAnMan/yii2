<?php

namespace tests\codeception\frontend\functional;

use tests\codeception\common\_pages\LoginPage;

class AALoginCest
{
    public function dummyTest($I)
    {
        session_write_close();
        session_start();
        LoginPage::openBy($I);
        //any of the below assertions will fail without this fix
        $I->dontSeeLink('Logout (erau)');
    }

    public function loginTest($I, $scenario)
    {
        $loginPage = LoginPage::openBy($I);
        $loginPage->login('uare', 'password_0');
        $I->expectTo('see that user is logged');
        //any of the below assertions will fail without this fix
        $I->dontSeeLink('Logout (erau)');
        $I->seeLink('Logout (uare)');
    }
}