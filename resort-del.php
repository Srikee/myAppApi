<?php
    include("config/autoload.php");

    $resort_id = @$REQUEST->resort_id;

    $sql = "DELETE FROM resort WHERE resort_id='".$resort_id."' ";
    $DATABASE->Query($sql);
    echo json_encode(array(
        "status"=>true
    ));
    