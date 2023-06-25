
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            input{
                width: 200px;
                height: 30px;
                border: #0e0e0e 1px solid;
            }
            select{
                height: 30px;

            }
            button{
                color:white;
                background-color: blue;
                border:0;
                padding:1rem;
                margin-top:1rem;
            }
        </style>
    </head>
    <body>
       <form method="post" action="index.php">

       <table>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <label for="weigth">Weight</label>
                </td>
                <td >
                    <input type="text" name="weight">
                </td>
            </tr>    
            <tr>
                <td>
                    <label for="height">Height</label>
                </td>
                <td>
                    <input type="text" name="height">
                </td>
                <td>
                    <select name="metrics" id="">
                        <option value="cm">cm</option>
                        <option value="m">m</option>
                        <option value="in">in</option>
                    </select>
                </td>
            </tr>    
    </table>
    <button type="submit">
                        CALCULATE <br>
                        BMI
                    </button>
                    <br>
                    <h2>

                    <?php
                        if(isset($_POST['weight']) and isset($_POST['height']) and isset($_POST['metrics']) ){
                            $weight = $_POST['weight'];
                            $height = $_POST['height'];
                            $metrics = $_POST['metrics'];
                            if($metrics == 'cm'){
                                $height = $height / 100;
                            }
                            if($metrics == 'in'){
                                $height = $height * 0.0254;
                            }
                            if($metrics == 'm'){
                                $height = $height;
                            }

                            $bmi = $weight / ($height * $height);
                            
                            if($bmi < 18.5){
                                $suggestion = "Underweight";
                            } elseif($bmi >= 18.5 and $bmi <= 24.9){
                                $suggestion = "Normal weight";

                            } elseif($bmi >= 25 and $bmi <= 29.9){
                                $suggestion = "Overweight";
                            } elseif($bmi >= 30 and $bmi <= 34.9){
                                $suggestion = "Obesity";
                            } else{
                                $suggestion = "Extreme Obesity";
                            }

                            echo "Your Body Mass Index is <span style='color:red'>".$bmi." </span>. This is considered <span style='color:red'>".$suggestion."</span>";

                        }
                    ?>
                    </h2>

       </form>
    </body>
</html>

