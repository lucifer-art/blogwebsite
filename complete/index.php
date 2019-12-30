<?php
$db1=mysqli_connect("localhost", "root", "", "mysql");
$q1="create database if not exists blog";
if(!mysqli_query($db1, $q1)) {
    die("Database creation failed: ".$db1->error);
}
$db1->close();
$db1=mysqli_connect("localhost", "root", "", "blog");
$q2="create table if not exists users(name varchar(255),email varchar(255), password varchar(255))";
if(!mysqli_query($db1, $q2)) {
die("Error creating users table : ".$db1->error);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">WebSite Name</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
        <div class="login-signup">
            <a class="btn" href="signup.php">SignUp <i class="fa fa-user-plus" aria-hidden="true"></i></a>
            <a class="btn" href="login.php">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a>
        </div>
    </div>
</nav>
<div class="container all-blogs">

    <div class="row line-blogs">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="image/index.svg">
                <div class="card-body">
                    <a href="allpost.html"><p class="card-text">This is First Post</p></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="image/index.svg">
                <div class="card-body">
                    <a href="allpost.html"><p class="card-text">This is First Post</p></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="image/index.svg">
                <div class="card-body">
                    <a href="allpost.html"><p class="card-text">This is First Post</p></a>
                </div>
            </div>
        </div>

    </div>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>