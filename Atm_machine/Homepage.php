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
        <a href="admin.html"><button style="float: right;margin-right: 20px;">Admin</button></a>
        <div class="card_no" >
        <p><ul>
            <li>Enter your Personal account details</li><br>
            <li>Card No: <input type="text" maxlength="12"></li>
            <li>Enter your PIN:<input type="password" maxlength="4"></li><br>
        </ul>
        </p>
            <div class="continue_btn">
            <a href="Mainmenu.html"><button>Continue</button></a>
            
            </div>
        </div>
    </body>
</html>

