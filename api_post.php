<?php

function api_post($r_post)
{
    global $myConnection;

    $user_name = $r_post['user_name'];

    $sqlCommand="INSERT INTO users (`user_name`) VALUES ('$user_name')";
    error_log($sqlCommand);
    $result = mysqli_query( $myConnection, $sqlCommand) or die ('Error selecting database11: '.mysql_error());
    if($result) {
        $response['message'] = 'User Information saved successfully.';
    } else {
        $response['message'] = 'Error in saving user information.';
    }

    header('Content-type: application/json');
    echo json_encode($response);
}

?>
