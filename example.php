<?php
    include("config/autoload.php");

    $val1 = @$REQUEST->val1;
    $val2 = @$REQUEST->val2;

    echo json_encode(array(
        "status"=>true,
        "val1"=>$val1,
        "val2"=>$val2,
        "data"=>array(
            array(
                "id"=>"1",
                "name"=>"รีสอร์ทบ้านไม่ริมเล"
            ),
            array(
                "id"=>"2",
                "name"=>"ดาดฟ้ารีสอร์ท"
            ),
        ),
    ));
    