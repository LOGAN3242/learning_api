<?php

    $_conn=mysqli_connect("localhost","root","");
    mysqli_select_db($_conn,"carwashing");

    $name=$_REQUEST["name"];
    $pass=$_REQUEST["pass"];
    //$email=$_REQUEST["email"];


    // $qry1="SELECT * FROM `users` WHERE ( `username` LIKE '$name' OR `email` LIKE '$email' ) AND (`password` LIKE '$pass')";
    $qry1="SELECT * FROM `user` WHERE `name` LIKE '$name' AND `pass` LIKE '$pass'";

    //$qry="INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES (NULL, '$name', '$pass', '$email')";
    $res1=mysqli_query($_conn,$qry1);
    $count=mysqli_num_rows($res1);

    if($count>0)
        $response="Successfully";
    else
    {
            $response="Login Failed";
    }
    
    echo json_encode($response);
    //echo $response;

?>