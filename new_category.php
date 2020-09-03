<?php
include "user_auth.php";
include "admin_auth.php";
include "post_config.php";
$c_name=$_POST['category_name'];
$p=new post();
$p->newCategory($c_name);