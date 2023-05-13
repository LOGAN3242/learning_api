<?php

    $_conn=mysqli_connect("localhost","root","");
    mysqli_select_db($_conn,"carwashing
    ");

    $name=$_REQUEST["name"];
    $pass=$_REQUEST["pass"];
    $email=$_REQUEST["email"];


    $qry1="SELECT * FROM `users` WHERE `email` LIKE '$email'";

    //$qry="INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES (NULL, '$name', '$pass', '$email')";
    $res1=mysqli_query($_conn,$qry1);
    $count=mysqli_num_rows($res1);

    if($count>0)
        $response="user already exist with this email id";
    else
    {
        $qry2="INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES (NULL, '$name', '$pass', '$email')";
        $res2=mysqli_query($_conn,$qry2);

        if($res2==true)
            $response="Registered Successfully";
        else
            $response="Failed to register";
    }
    
    echo json_encode($response);

?>