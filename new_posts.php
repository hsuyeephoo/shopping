<?php
include "user_auth.php";
include "admin_auth.php";
include "post_config.php";
$p=new post();
$cats=$p->getCategory();
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
             New Posts
            <a href="posts.php" class="pull-right">
            <i class="glyphicon glyphicon-plus-sign"></i> Posts</a>
        </h5>
    </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3" >
            <form>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image">
                </div>
                <div class="form-group">
                    <label for="item_name">Item Name</label>
                    <input type="text" name="item_name" id="item_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category_id"> Category</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <?php
                        foreach(cats as $c){
                        ?>
                            <option value="<?php echo $c['id']?>"<?php echo $c['category_name']?>></option>
                            <?php
                        }

                        ?>

                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg">Save</button>
                </div>
            </form>

        </div>


    </div>

</div>

<script src="bootstrap/js/jQuery.js" ></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>

