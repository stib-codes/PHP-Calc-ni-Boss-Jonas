<?php

    function sum ($a, $b){
        return $a + $b;
    }
    function product ($a, $b){
        return $a * $b;
    }
    function sub ($a, $b){
        return $a - $b;
    }
    function quotient ($a, $b){
        return $a / $b;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSIT 2-1</title>
    <style>

        * {
            box-sizing: border-box;
        }
        body {
            background-color: darkblue;
            margin: 0;
            color: white;
            font-family: "Courier New", Courier, monospace;
            font-size: 20px;
        }
        label {
            display: block;
            color: white;
            font-size: 20px;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .result {
            border-top: 2px solid white;
            margin-top: 25px;
            padding-top: 10px;
            color: white;
            line-height: 1.8;
            text-align: left;
        }

        h1 {
            text-align: center;
            color: white;
            font-size: 40px;
            margin: 20px 0;
        }

        h3 {
            color: white;
            font-size: 30px;
            margin-top: 0;
            margin-bottom: 10px;
        }

        input {
            background-color: darkblue;
            color: white;
            border: 1px solid white;
            padding: 8px;
            width: 100%;
            font-family: "Courier New", monospace;
            font-size: 16px;
        }

        button {
            display: block;
            border: 2px solid white;
            color: darkblue;
            background-color: white;
            padding: 10px 30px;
            margin: 25px auto 10px;
            width: 200px;
            border: none;
            font-size: 20px;
            font-family: "Courier New", Courier, monospace;
        }

        header {
            background-color: darkblue;
            padding: 20px;
            margin: 0;
            height: 80px;
            border-bottom: 3px solid white;
        }

        form {
            background-color: darkblue;
            border: 3px solid white;
            width: 600px;
            padding: 30px;
            margin: 20px auto;
            text-align: left;
        }
    </style>
</head>
<body>
     
    <header>
        <h1></h1>
    </header>
    <h1>Calculator</h1>

    <form action="" method="post">
        <div class="input">
            <label>Input 1st Number:</label>
            <input type="number" name="numOne" required>

            <label>Input 2nd Number:</label>
            <input type="number" name="numTwo" required>
        </div>

        <button type="submit" name="BtnSubmit">Submit</button>

        <div class="result">
            <h3>Result:</h3>
            <?php
                if(isset($_POST["BtnSubmit"])){
                    $numOne = $_POST["numOne"]; 
                    $numTwo = $_POST["numTwo"];

                   echo "The Sum is: " . sum($numOne, $numTwo) ."<br>";
                   echo "The Difference is: " . sub($numOne, $numTwo) ."<br>";
                   echo "The Product is: " . product($numOne, $numTwo) ."<br>";
                   echo "The Quotient is: " . quotient($numOne, $numTwo) ."<br>";

                }
            ?>
        </div>


    </form>
</body>
</html>