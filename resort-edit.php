<?php
    include("config/autoload.php");

    $resort_id = @$REQUEST->resort_id;
    $resort_name = @$REQUEST->resort_name;
    $resort_detail = @$REQUEST->resort_detail;
    $resort_img = @$REQUEST->resort_img;

    $sql = "
        UPDATE resort SET
            resort_name='".$resort_name."',
            resort_detail='".$resort_detail."',
            resort_img='".$resort_img."'
        WHERE resort_id='".$resort_id."'
    ";
    $DATABASE->Query($sql);
    echo json_encode(array(
        "status"=>true
    ));
    