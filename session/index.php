<?php
    session_start();

    $userDetails = array("firstName"=>"john","lastName"=>"Smith","age"=>34);
    
    $_SESSION['userDetails'] = $userDetails;

    echo "Session ID: ".session_id()."<br>";
    echo "Session Name: ".session_name()."<br>";
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),'',time()-86400,'/');
    }
    $_SESSION = array();
    session_destroy();



?>