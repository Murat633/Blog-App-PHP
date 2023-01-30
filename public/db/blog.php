<?php
include "connection.php";
ob_start();
session_start();
class Blog extends DB 
{
    public function addBlog($img,$title,$description,$categoryid,$authorid,$author){
        $isOK = $this->add("blog", 
        "title=:title,
        description=:description,
        categoryid=:categoryid,
        authorid=:authorid,
        author=:author, 
        img=:img", 
        [
            'img' => $img,
            'title' => $title,
            'description' => $description,
            'categoryid' => $categoryid,
            'authorid' => $authorid,
            'author' => $author
        ]);

        $this->isOK($isOK);
    }
    public function deleteBlog($id){
        $isOK = $this->sqlexec("DELETE FROM blog WHERE id=:id", ['id' => $id]);
        $this->isOK($isOK);
    }
    public function editBlog($id,$img,$title,$description,$categoryid){
        $isOK = $this->sqlexec("UPDATE blog SET img=:img,title=:title,description=:description,categoryid=:categoryid WHERE id=:id",
        [
            'id' => $id,
            'title' => $title,
            'description' => $description,
            'categoryid' => $categoryid,
            'img' => $img
        ]);

        $this->isOK($isOK);
    }

    public function isOK($isOK) {
        if($isOK){
            header("location:../nedmin/blog-settings.php?is=ok");
        }else{
            header("location:../nedmin/blog-settings.php?is=no");
        }
    }
}

if(isset($_SESSION["admin_email"])){

    $blog = new Blog();

    if(isset($_POST["addblog"])){

        $title = $_POST['title'];
        $description = $_POST['description'];
        $authorid = $_POST['authorid'];
        $categoryid = $_POST['categoryid'];
        $author = $blog->getOne("user","id=:id",['id' => $authorid]);

       
        $file = $_FILES["blog_img"];
        $dir = "../img";
        $tmpName = $file["tmp_name"];
        $name = $file["name"];

        $randomNumber = rand(20000,100000);

        $dirEdit = substr($dir,3)."/".$randomNumber.$name;

        @move_uploaded_file($tmpName, $dir . "/" . $randomNumber . $name);

        $blog->addBlog($dirEdit,$title,$description,$categoryid,$authorid,$author["username"]);
    }

    if(isset($_POST["editblog"])){

        $id = $_POST['blogid'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $categoryid = $_POST['categoryid'];
        $old_path = $_POST['old_path'];

        if($_FILES["blog_img"]["name"]!=""){
            $file = $_FILES["blog_img"];
            $dir = "../img";
            $tmpName = $file["tmp_name"];
            $name = $file["name"];

            $randomNumber = rand(20000,100000);

            $dirEdit = substr($dir,3)."/".$randomNumber.$name;
            @move_uploaded_file($tmpName, $dir . "/" . $randomNumber . $name);
            unlink("../$old_path");
        }else{
            $dirEdit = $_POST["old_path"];
        }   


        $blog->editBlog($id,$dirEdit,$title,$description,$categoryid);
    }

    if(isset($_POST["delete"])){
        $blog->deleteBlog($_POST["delete"]);
    }




}
    
?>