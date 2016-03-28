<?php

function api_get()
{
    global $myConnection;

    $response = array();
    $sqlCommand=" SELECT user_id, user_name FROM users";
        $query_data = mysqli_query( $myConnection, $sqlCommand) or die ('Error selecting database: '.mysql_error());
        if ($query_data->num_rows) {
            $result_array = array();
            while($row = mysqli_fetch_assoc($query_data)) {
                $arr = $fields = array();
                $arr["user_id"] = $row['user_id'];
                $arr["user_name"] = $row['user_name'];


                $result_array[] = $arr;
            }
            $response = $result_array;
        }

    header('Content-type: application/json');
    echo json_encode($response);
}
?>
