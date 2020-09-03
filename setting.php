<?php include "user_auth.php"?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php include"navbar.php"?>
<div class="container">
    <div class="page-header">
        <h4><i class="glyphicon glyphicon-cog"> user account setting</i></h4>
    </div>
    <di class="row">
        <div class="col-sm-8">
            <p>
                <i class="glyphicon glyphicon-user"></i>
                    User Name:<?php echo $_SESSION['login']['name'];?>
            </p>
            <p>
                <i class="glyphicon glyphicon-envelope"></i>
                Email:<?php echo $_SESSION['login']['email'];?>
            </p>
            <p>
                <i class="glyphicon glyphicon-pencil"></i>
                Role:<?php
                if($_SESSION['login']['role']){
                    echo "admin";
                }else{
                    echo "user";
                }
                ?>
            </p>
            <p>
                <i class="glyphicon glyphicon-time"></i>
                Member since:<?php echo date("D d m/y h:i s A",strtotime($_SESSION['login']['created_at']));?>
            </p>
        </div>
        <div class="col-sm-4">

        </div>
    </di>
</div>

<script src="bootstrap/js/jQuery.js" ></script>
<script src="bootstrap/js/bootstrap.js" ></script>
</body>
</html>

