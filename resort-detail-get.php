<?php
    include("config/autoload.php");

    $resort_id = @$REQUEST->resort_id;
    // $resort_id = "6";

    $sql = "SELECT * FROM resort WHERE resort_id='".$resort_id."' ";
    $data = $DATABASE->QueryObj($sql);

    if( sizeof($data)==1 ) {
        echo json_encode(array(
            "status"=>true,
            "data"=>$data[0]
        ));
    } else {
        echo json_encode(array(
            "status"=>false,
            "msg"=>"No data."
        ));
    }
    