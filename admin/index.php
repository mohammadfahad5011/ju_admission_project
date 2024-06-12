<?php
	require('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ইন–জিনিয়াস</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, maximum-scale=1, user-scalable=0" />

	
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>css/materialize.min.css">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>css/admin/style.css">
	<!--===============================================================================================-->
	
</head>
<body>


  <div class="container">
  <div class="row">
    <div class="col s6 offset-s3">
      <h4 class="center">কৃষি পুরস্কার</h4>
      
      <?php

        if(isset($_POST) && !empty($_POST)){
          $name = $_POST['name'];
          $password = $_POST['password'];
          if($name == 'agriaward' && $password == 'agriaward@234'){

                setcookie("logged_username", $name, time() + 3600);

                setcookie("alert_message", "You have successfully login", time() + 60);

                header('Location: '.$base_url.'admin/home.php');

          }else{

            setcookie("alert_message", "Username or Password is not match", time() + 60);
            $redirect_url = $base_url.'admin';

            header('Location: '.$redirect_url);

          }
        }

        if(!empty($_COOKIE['alert_message'])){
      ?>
          <div class="msg msg-alert z-depth-3">
            <?php echo $_COOKIE['alert_message']; ?>
          </div>
      <?php
        }
      ?>

      <form class="col s12 login_form" action="<?php echo $base_url ?>admin/index.php" method="POST" autocomplete="off">
            <div class="row">
              
              <div class="result-page">

                  <div class="input-field col s12">
                    <input id="name" type="text" name="name" class="validate" required="required">
                    <label for="name">নাম</label>
                  </div>      

                  <div class="input-field col s12">
                    <input id="phone" type="password" name="password" class="validate" required="required">
                    <label for="password">পাসওয়ার্ড</label>
                  </div> 

                  <div class="col s12">
                    <button class="btn waves-effect waves-light right red" type="submit" name="action">Submit
                      <i class="material-icons right">send</i>
                    </button>
                  </div>

              </div>
              

            </div>            
        </form>

    </div>
  </div>
</div>


	<!--===============================================================================================-->
	<script src="<?php echo $base_url ?>js/jquery.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo $base_url ?>js/materialize.min.js"></script>

	<!--===============================================================================================-->
	<script src="<?php echo $base_url ?>js/jquery.matchHeight.js"></script>

	<!--===============================================================================================-->
	<script src="<?php echo $base_url ?>js/jquery.validate.js"></script>

</body>
</html>
