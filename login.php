<!DOCTYPE html>
<html >
    <?php 
    session_start(); 
    if(isset($_SESSION['login'])==true){
        if(strcmp($_SESSION['Account_type'],"A")==0) {
            header("Location: accueilAdmine.php");
        }else{
            header("Location: home.php");
        }   
    }
    ?>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  
  
    	<link rel="stylesheet" href="css/login_style.css">

  
</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1 id="head">SOS-PC</h1>
		
		<form class="form" action="./php/login.php" method="post" id="form">
			<input type="email" maxlength="100" required id="mail" name="mail" placeholder="Email"  title="Veuillez saisir une adresse email valide">
			<input type="password"  pattern=".{6,}"  maxlength="20" required id="pwd" name="pwd"placeholder="Mot de passe (min 6 caractères)"  title="Veuillez saisir votre mot de passe de taille minimale 6">
			<button type="submit" id="login-button">Se connecter</button>
			</br>
            </br>
            <strong>vous n'avez pas de compt ? ...<a href="signUp.php"> inscriez-vous</a></strong>
	        </br>
			<div class="alert alert-danger" style="display:none;" id="err">
 		    <strong>Attention!</strong> Indicates a dangerous or potentially negative action.
			</div>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/login_index.js"></script>

</body>
</html>
