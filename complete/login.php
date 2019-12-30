<?php 



if(isset($_POST["sign"]))
{
    $connection= mysqli_connect('localhost','root','','blog');
    $email=$_POST['email'];
    $fname=$_POST['fname'];
    $pass = $_POST['pwd'];


            if(!empty($_POST['email']) && !empty($_POST['pwd']))
            {

                    //   $user=$_POST['email'];
                    //   $pass=$_POST['psw'];

                      $con=mysqli_connect('localhost','root','','blog');
                      $query="SELECT * FROM users WHERE email='".$email."' AND password='".$pass."'";
                      $result=mysqli_query($con,$query);
                      $numrows=mysqli_num_rows($result);
                      if($numrows!=0)
                      {
                          while($row=mysqli_fetch_assoc($result))
                          {
                          $dbusername=$row['email'];
                          $dbpassword=$row['password'];
                          }

                                if($email == $dbusername && $pass == $dbpassword)
                                {
                                // session_start();
                                // $_SESSION['sess_user']=$user;
                                        /*  echo '<script type="text/JavaScript">
                                          alert("Successful ");
                                          </script>' ;
                                          Redirect browser*/
                                header("Location: landing.html");
                                exit;
                                }
                      }


            }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/loginSignup.css">
</head>
<body>
<div class="container">
    <div class="row container-area">
        <div class="col-md-6 image">
        </div>
        <div class="col-md-6 form">
            <h3 class="heading">Login</h3>
            <form action="login.php" method="post">
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="password" name="pwd" placeholder="Password" required><br>
                <input class="btn btn-primary btn-lg rounded-pill" name="sign" type="submit" value="Submit"> <span>or <a
                    href="signup.php">Register Now</a></span>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>