<?php

    $_conn=mysqli_connect("localhost","root","");
    mysqli_select_db($_conn,"carwashing
    ");

    $name=$_REQUEST["name"];
    $pass=$_REQUEST["pass"];
    $email=$_REQUEST["email"];


    $qry="INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES (NULL, '$name', '$pass', '$email')";

    $res=mysqli_query($_conn,$qry);

    if($res==true)
        $response="data inserted successfully";
    else
        $response="failed to insert data";
    
    echo json_encode($response);

?>