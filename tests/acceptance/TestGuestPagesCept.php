<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Open the home/join/login pages');
$I->amOnPage('/');
$I->see('Welcome','h1');
$I->seeLink('Join','/user/join');
$I->seeLink('Log in','/user/login');

$I->amOnPage('/user/join');
$I->see('Join us','h1');

$I->amOnPage('/user/login');
$I->see('Log in','h1');