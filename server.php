<!DOCTYPE html>
<html>
    <head>
        <title> Choucroute Pursuit</title>
        <link rel="icon" style="width: 200PX;" type="image/png" href="./img/logo.png" />

        <meta charset="UTF-8">
        <meta name="description" content="Choucroute pursuit">
        <meta name="keywords" content="videogame, games,  jeux, Choucroute, pursuit, Choucroute pursuit ">
        <meta name="author" content="Sundus">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <style>
        h3{
			text-align: center;
			text-shadow: 0 1px 0 #cccccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbbbbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaaaaa, 0 6px 1px rgba(0, 0, 0, 0.1), 0 0 5px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3), 0 3px 5px rgba(0, 0, 0, 0.2), 0 5px 10px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(251, 255, 0, 0.2), 0 20px 20px rgba(0, 0, 0, 0.15);
			font-size: 4em ;
			color:rgba(177, 2, 2, 0.849);
			font-family: Merriweather;
			font-weight:700;
		} 
    </style>
    <body>

		<?php
			session_start();
			$username = "";
			$email = "";
			$errors = array();
			$msg = "";
			$err1 =  "Message est requis";
			$err2 =  "E-mail est requis";


			$link = "index.php";

			$db = mysqli_connect('sql100.epizy.com','epiz_31317840','9zA0zDXJA3W87','epiz_31317840_choucroute_contact');

			if (isset($_POST['envoyer'])){
				$msg = isset($_POST['textarea']) ? $_POST['textarea'] : null;
				$email =isset($_POST['email']) ? $_POST['email'] : null;
				$DATE_MESSAGE = date("Y-m-d H:i:s");

				//not very usefull since it's already been treate by js but to double check it any way
				if (empty($msg)){
					array_push($errors, "$err1 ");
				}

				if (empty($email)){
					array_push($errors, "$err2 ");
				}


				if (count($errors) == 0){			        
					$sql1 = "INSERT INTO contact (email, message, dateMessage) 
						VALUES ('$email', '$msg', '$DATE_MESSAGE')";
				}


				if(!mysqli_query($db,$sql1))
				{
                    ?>   
					<h3> <?php echo 'Not inserted';?>  </h3>
						<h3> <?php echo 'Maybe your message was too long, try to contact us on : groupeproject5a@gmail.com ';?>  </h3>
					<?php
					header("refresh:20; url=$link");
				}
				else
				{
					?>   
					<h3> <?php echo "Thanks for your message";?>  </h3>
						
					<?php
                    header("refresh:2; url=$link");
				}
			

			}
		?>

	</body>
</html>