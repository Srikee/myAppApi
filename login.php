<?php
    include("config/autoload.php");

    $email = @$REQUEST->email;
    $password = @$REQUEST->password;

    $sql = "SELECT * FROM user WHERE email='".$email."' AND password='".$password."' ";
    $data = $DATABASE->QueryObj($sql);
    if( sizeof($data)==1 ) {
        echo json_encode(array(
            "status"=>true,
            "user"=>$data[0]
        ));
    } else {
        echo json_encode(array(
            "status"=>false,
        ));
    }
    