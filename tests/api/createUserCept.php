<?php 
$I = new ApiTester($scenario);
$I->wantTo('create a user');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->sendPOST('/users', ['user_name' => 'Mahesh1']);
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseContains('{"message":"User Information saved successfully."}');
?>
