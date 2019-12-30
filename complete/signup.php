<?php


if(isset($_POST['signup']))
{
    $connection= mysqli_connect('localhost','root','','blog');


    $email=$_POST['email'];
    $fname=$_POST['fname'];
    $pass = $_POST['pwd'];



      if($connection)

                  {


                      $query = "insert into users (name,email,password) values ('$fname','$email','$pass')";
                      $result=mysqli_query($connection,$query);
                      if($result)
                      {
                          echo '<script type="text/JavaScript">
                          alert("Successful ");
                          </script>' ;
                          header("Location: login.php");
                      }





                  }

}


?>
<html>
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
            <h3 class="heading-registration">Registration Info</h3>
            <form action="signup.php" method="post">
                <input type="text" name="fname" placeholder="Name" required><br>
                <input type="date" placeholder="DOB" required><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="password" name="pwd" placeholder="Password" required><br>
                <input type="password" placeholder="Confirm Password" required><br>
                <input class="btn btn-primary btn-lg rounded-pill" name="signup" type="submit" value="Submit"> <span>or <a href="login.php">Login</a></span>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>