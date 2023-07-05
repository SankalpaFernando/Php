<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./login.php" method="post">
        <h2>Login Form</h2>
        <table>
            <tr>
                <td>Username: </td>
                <td>
                    <input type="text" name="username" required>
                </td>
            </tr>
            <tr>
                <td>Password: </td>
                <td>
                    <input type="password" name="password" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Login" name="login">
                </td>
            </tr>
        </table>
    </form>    
</body>
</html>

<?php
    session_start();

    if(isset($_POST["login"])){
        if($_POST["username"]=="admin" && $_POST["password"]=="admin"){
            $_SESSION['user'] = array("username"=>$_POST["username"],"password"=>$_POST["password"]);
            $_SESSION['loggedIn'] = true;
            header("Location: ./dashboard.php");
            exit();
        }else{
            echo "You are not authorized to access this page";
        }
    }


?>