
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
        button{
            border-right: 10px;
        }
    </style>
</head>
<body>
<?php include"navbar.php"?>
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <?php include "message.php"?>
            <h2 class="text-center">Singniup new  an account</h2>
            <form method="post" action="post_register.php">
                <div class=form-group>
                    <lable for="name">Name</lable>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <lable for="email">Email</lable>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <lable for="password">Password</lable>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="form-group" >
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg">Signin</button>
                </div>
            </form>
            Already have an account?<a href="login.php">Singup</a>
        </div>

    </div>

</div>

<script src="bootstrap/js/jQuery.js" ></script>
<script src="bootstrap/js/bootstrap.js" ></script>
</body>
</html>
