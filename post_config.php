<?php
session_start();
class post{
 public $db;
    public function __construct()
    {
        try{
            $this->db=new PDO("mysql:host=localhost; dbname=thatoneshopping",
                "root","");
        }catch (PDOException $e){
            die("Connection failed to database server");
        }
    }
    public function updateCategory($id,$cname){
      $sql="update category set category_name='$cname' where id='$id'";
      $this->db->query($sql);
      $_SESSION['success']="the selected category name been updated";
      header("location:category.php");
    }
    public function deleteCategory($id){
        $sql="delete from category where id='$id'";
        $this->db->query($sql);
        $_SESSION['success']="the select category have been deleted";
        header("location:category.php");
    }
    public function getCategory(){
        $sql="select * from category";
        return $this->db->query($sql);

    }
    public function newCategory($category_name){
        $old_sql="select * from category where category_name='$category_name'";
        $row=$this->db->query($old_sql)->fetch(PDO::FETCH_ASSOC);
        if(empty($row)){
            $sql="insert into category (category_name) values ('$category_name')";
            $this->db->query($sql);
            $_SESSION['success']="the category name have been created";
            header("location: category.php");

        }else{
            $_SESSION['error']=" the selected category name is existed";
            header("location: category.php");
        }

    }
}