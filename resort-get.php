<?php
    include("config/autoload.php");

    $val1 = @$REQUEST->val1;
    $val2 = @$REQUEST->val2;

    $sql = "SELECT * FROM resort";
    $data = $DATABASE->QueryObj($sql);

    echo json_encode(array(
        "status"=>true,
        "val1"=>$val1,
        "val2"=>$val2,
        "data"=>$data
    ));
    