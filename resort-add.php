<?php
    include("config/autoload.php");

    $resort_name = @$REQUEST->resort_name;
    $resort_detail = @$REQUEST->resort_detail;
    $resort_img = @$REQUEST->resort_img;

    $resort_id = $DATABASE->QueryMaxId("resort", "resort_id");
    $sql = "
        INSERT INTO resort (
            resort_id,
            resort_name,
            resort_detail,
            resort_img
        ) VALUES (
            '".$resort_id."',
            '".$resort_name."',
            '".$resort_detail."',
            '".$resort_img."'
        )
    ";
    $DATABASE->Query($sql);
    echo json_encode(array(
        "status"=>true
    ));
    