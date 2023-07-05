<?php
    session_start();

    if($_SESSION['loggedIn']==true){
        echo "<b> Hi, ".ucfirst($_SESSION["user"]["username"])."</b><br>";
    }else{
        echo "Your aren't logged in <br>";
    }
    if(isset($_POST["logout"])){
        if(isset($_COOKIE[session_name()])){
            setcookie(session_name(),'',time()-86400,'/');
        }
        session_destroy();
        $_SESSION=array();
        header("Location: ./login.php");
        exit();
    }

?>

<form action="dashboard.php" method="post">
    <input type="submit" value="Log Out" name="logout">
</form>