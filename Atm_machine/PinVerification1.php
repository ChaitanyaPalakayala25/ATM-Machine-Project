<?php
include"Connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <div class="heading">
        <marquee behavior="scroll" direction="right" scrollamount = "10" >
            <h1>
                Welcome to ATM
            </h1>
        </marquee>
    </div>
        <title>
            ATM 
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <hr>
    <body>
        <div class="card_no" >
        <p><ul>
            <li>Enter your PIN:<input type="password" maxlength="4"></li><br>
        </ul>
        </p>
            <div class="continue_btn">
            <a href="Balance.html"><button>Continue</button></a>
            
            </div>
        </div>
    </body>
</html>

