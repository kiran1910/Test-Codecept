<?php 
$I = new ApiTester($scenario);
$I->wantTo('get all available users');
$I->sendGET('/users');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
?>
