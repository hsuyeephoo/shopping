
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
        h2{
            margin-bottom: 50px;
          }
    </style>
</head>
<body>
<?php include"navbar.php"?>
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <?php include "message.php"?>
            <h2 class="text-center">Singnin To Continued</h2>
            <form method="post" action="post_login.php">
                <div class="form-group">
                    <lable for="email">Email</lable>
                    <input type="email" id="email" name="email" class="form-control" >
                </div>
                <div class="form-group">
                    <lable for="password">Password</lable>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg">Signin</button>
                </div>
            </form>
          Don't have an account?<a href="register.php">Singin</a>
        </div>

    </div>

</div>

<script src="bootstrap/js/jQuery.js" ></script>
<script src="bootstrap/js/bootstrap.js" ></script>
</body>
</html>