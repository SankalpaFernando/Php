
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
       <form method="post" action="./index.php">

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
                            echo $_POST['weight'];
                        }
                    ?>
                    </h2>

       </form>
    </body>
</html>
