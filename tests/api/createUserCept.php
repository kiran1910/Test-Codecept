<?php 
$I = new ApiTester($scenario);
$I->wantTo('Api to create a user');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->sendPOST('/users', ['user_name' => 'Rakesh']);
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseContains('{"message":"User Information saved successfully."}');
?>
