<?php
session_start();
if(!isset($_SESSION["name"])){
    $_SESSION["data"]=array("step1"=>array(),"step2"=>array());
    $_SESSION["name"] = "step1";
}else{
    if(isset($_POST["next"])){
        if($_SESSION["name"]=="step1"){
            $_SESSION["data"]["step1"]= $_POST;
            $_SESSION["name"] = "step2";

        }else if($_SESSION["name"]=="step2"){
            $_SESSION["data"]["step2"]= $_POST;
            $_SESSION["name"] = "step3";
        }
    }
    if(isset($_POST["back"])){
        if($_SESSION["name"]=="step2"){
            $_SESSION["name"] = "step1";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
        <h1>
            Incredible Food: 
            <?php
                switch($_SESSION["name"]){
                    case "step1":
                        echo "Step 1: Customer Details";
                        break;
                    case "step2":
                        echo "Step 2: Your Order";
                        break;
                    case "step3":
                        echo "Thank You";
                        break;
                    default:
                        echo "Step 1";
                }
            ?>
        </h1>
        <hr>
                <?php 
                    if($_SESSION["name"]=="step1"){
                ?>
        <form action="index.php" method="post">
        <table>
                <tr>
                    <td>
                        <label for="name">Name</label>
                    </td>
                    <td>
                        <input type="text" name="name" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mobile">Mobile</label>
                    </td>
                    <td>
                        <input type="tel" name="mobile" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address">Address</label>
                    </td>
                    <td>

                        <textarea type="text" col="8" name="address"></textarea>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Next &&" name="next">
        </form>

            <?php
                    }
            ?>
             <?php 
                    if($_SESSION["name"]=="step2"){
                ?>
        <form action="index.php" method="post">
            <table>
                <tr>
                    <b>Select Items</b>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="pizza" id="pizza">
                    <label for="pizza">Pizza (LKR 1000)</label>  
                  </td>
                  <td>
                    <input type="number" name="pizzaQuantity" id="pizzaQuantity" >
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="checkbox" name="burger" id="burger">
                    <label for="pizza">Burger (LKR 500)</label>  
                  </td>
                  <td>
                    <input type="number" name="burgerQuantity" id="burgerQuantity">
                  </td>
                </tr>
            </table>
           <div style="display:flex;">
           <input type="submit" value="Next &&" name="next">
            <input type="submit" value="Back &&" name="back">
           </div>

                    </form>
        <?php
                    }
            ?>
            <?php 
                    if($_SESSION["name"]=="step3"){
                ?>
                <div class="display"">
                    <?php  
                    echo "<p>Name: ".$_SESSION["data"]["step1"]["name"]."</p><br>";

                     echo "<p>Mobile: ".$_SESSION["data"]["step1"]["mobile"]."</p><br>";
                     echo "<p>Address: ".$_SESSION["data"]["step1"]["address"]."</p><br>";
                    
                    $price =($_SESSION["data"]["step2"]["pizzaQuantity"]*1000) +($_SESSION["data"]["step2"]["pizzaQuantity"] *500);

                        echo "<p>Your Order has been placed for amount of LKR.".$price."</p>";
                    ?>
                </p>

<?php
                    }
            ?>
    </div>
</body>
<script src="index.js"></script>
</html>