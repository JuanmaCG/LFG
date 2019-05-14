
<!DOCTYPE html>
<html>

<head>
<title>Looking For Gamers</title>
<link rel="icon" href="../images/icono.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gaming Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../css/login.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
	<div class="padding-all">
		<div class="header">
			<h1><img src="../images/5.png" alt=" "> LFG Login </h1>
		</div>

		<div class="design-w3l">
			<div class="mail-form-agile">
				<form action="../php/LoginProcedimiento.php" method="post">
					<input type="text" name="username" placeholder="Usuario" required=""/>
					<input type="password"  name="password" class="padding" placeholder="Password" required=""/>
					<input type="submit" value="submit">
				</form><br>
                <a href="registro.html" style="color: #3b5998">Si no tienes aun cuenta registrate</a>
			</div>
		  <div class="clear"> </div>
		</div>
		
		<div class="footer">
		<p>© 2019 Looking For Gamers. All Rights Reserved | Design by Juan Manuel </p>
		</div>

        <?
            include '../php/Login.php';
            if($_SESSION['succeed'] === false){
                echo "<script>alert('Usuario o contraseña incorrecta')</script>";
            }

        ?>
	</div>
</body>
</html>