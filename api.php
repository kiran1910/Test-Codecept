<?php

require_once 'db_config.php';

function main() {
    switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        require_once("api_get.php");
        api_get();
        break;

    case 'POST':
        require_once("api_post.php");
        api_post();
        break;
    }
}
main();

?>
