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
            <form action="#"method="POST">
        <p><ul>
            <li>Enter your Personal account details</li><br>
            <li>Admin ID: <input type="text" name="username"></li>
            <li>Password:<input type="password" name="password"></li><br>
        </ul>
        </p>
            <div class="continue_btn">
            <input class="btn btn-default" type="submit" name="submit" value="Login"
            >
           
            </div>
            </form>
        </div>
    </body>
</html>

<?php
	
	if(isset($_POST['submit']))
	{	
		$count=0;
		$res=mysqli_query($db,"SELECT * FROM `admin`WHERE name='$_POST[username]' AND password='$_POST[password]';");
		$row= mysqli_fetch_assoc($res);
		$count=mysqli_num_rows($res);

		if($count==0)
		{
			?>
				<div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
					<strong>The username and password doesn't match</strong>
				</div>
				
			<?php
		}
		else
		{
			$_SESSION['login_user'] = $_POST['username'];

			?>
				<script type="text/javascript">
					window.location="Data.php"
				</script>
			<?php
		}


	}


?> 