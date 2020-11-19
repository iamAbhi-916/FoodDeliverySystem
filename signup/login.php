<?php 
session_start();

?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];


  $emailsearch = "select * from registration where email = '$email'";
  $query = mysqli_query($con , $emailsearch);


  $email_count = mysqli_num_rows($query);

  if($email_count){
    $email_pass = mysqli_fetch_assoc($query);

    $db_pass = $email_pass['password'];

    $pass_decode = password_verify($password , $db_pass);
    if($pass_decode){
      echo "Login successful";
     
      ?>
      <script >
       location.replace("../index.php");
      </script>


      <?php


    }else{
      echo "password incorrect";
    }

  }else {
    echo "email not found";
  }

 


}





?>



  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
  <div id="login-box">
  <div class="left">
    <h1>LOGIN</h1>
    
   
    <input type="text" name="email" placeholder="E-mail" required="" />
    <input type="password" name="password" placeholder="Password" required="" />
   
    <input type="submit" name="submit" value="LOGIN Now" />
 
      
    
  </div>
  </form>

  
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  <div class="or">OR</div>
</div>

</body>
</html>