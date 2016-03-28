<?php 
$I = new ApiTester($scenario);
$I->wantTo('get all available users');
$I->sendGET('/api.php');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
?>
