<?php 
$I = new ApiTester($scenario);
$I->wantTo('Api to create a user');
$I->haveHttpHeader('Content-Type', 'application/json');
$I->sendPOST('/api.php', ['user_name' => 'Mahesh1']);
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
?>
