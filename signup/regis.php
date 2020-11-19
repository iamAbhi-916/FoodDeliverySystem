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
    $username = mysqli_real_escape_string($con ,$_POST['username']);
    $email =  mysqli_real_escape_string($con ,$_POST['email']);
    $password = mysqli_real_escape_string($con ,$_POST['password']);
    $cpassword  = mysqli_real_escape_string($con ,$_POST['cpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);


    $emailquery = "select * from registration where email= '$email' ";
    $query = mysqli_query($con , $emailquery);

    $emailcount = mysqli_num_rows($query);


    if($emailcount>0){
      echo "email already exist";
    }else{
      if($password === $cpassword){

        $insertquery = " insert into registration(username, email, password, cpassword)  
        values('$username' , '$email', '$pass', '$cpass')";

        mysqli_query($con , $insertquery);

          if($con){
            ?>
            <script >
              alert ("insertion successful");
            </script>
            <?php
          }else{
            ?>
            <script >
              alert ("insertion error");
            </script>
            <?php
          }

      }else{
        echo "password not matching";
      }
    }



  }

   ?>








  <form action="" method="POST">
  <div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
    
    <input type="text" name="username" placeholder="Username" required="" />
    <input type="text" name="email" placeholder="E-mail" required="" />
    <input type="password" name="password" placeholder="Password" required="" />
    <input type="password" name="cpassword" placeholder="Retype password" required="" />
    
    <input type="submit" name="submit" value="Sign me up" />
    <p class ="text-center">Have an account <a href="login.php">Log In</a></p>
      
    
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