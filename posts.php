<?php
include "user_auth.php";
include "admin_auth.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thatone Shopping >>posts</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php include "navbar.php" ?>
<div class="container">
    <div class="page-header">
        <h5>
            <i class="glyphicon glyphicon-tags"></i>
            Posts
            <a href="new_posts.php" class="pull-right">
            <i class="glyphicon glyphicon-plus-sign"></i>New Posts</a>
        </h5>
    </div>

</div>

<script src="bootstrap/js/jQuery.js" ></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
