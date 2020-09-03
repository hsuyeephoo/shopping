<?php
include "user_config.php";
include "admin_auth.php";
include "post_config.php";
$id=$_POST['id'];
$cname=$_POST['category_name'];

$p=new post();
$p->updateCategory($id,$cname);
