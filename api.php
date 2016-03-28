<?php

require_once 'db_config.php';

function main() {
    switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        require_once("api_get.php");
        api_get();
        break;

    case 'POST':
        $r_post = json_decode(file_get_contents('php://input'), true);
        require_once("api_post.php");
        api_post($r_post);
        break;
    }
}
main();

?>
