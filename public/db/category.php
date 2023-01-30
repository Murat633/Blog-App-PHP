<?php 
include "connection.php";
ob_start();
session_start();

if(isset($_SESSION["admin_email"])){
    


    class Category extends DB 
    {
        public function addCategory($name,$icon) {
            $isOK = $this->add("category","name=:name,icon=:icon",['name' => htmlspecialchars($name),'icon' => htmlspecialchars($icon)]);

            $this->isOk($isOK);
        }
        private function isOk($isOK) {
            if($isOK) {
                header("location:../nedmin/category-settings.php?is=ok");
            }else{
                header("location:../nedmin/category-settings.php?is=no");
            }            
        } 
        public function deleteCategory($id) {
            $isOK = $this->sqlexec("DELETE FROM category WHERE id=:id", ['id' => htmlspecialchars($id)]);
            $this->isOK($isOK);
        }
        public function updateCategory($id,$newText,$icon = "fa-solid fa-list") {
            $isOK = $this->sqlexec("UPDATE category set name=:name,icon=:icon WHERE id=:id", ['id' => htmlspecialchars($id),'name' => htmlspecialchars($newText),'icon' => htmlspecialchars($icon)]);
            $this->isOK($isOK);
        }
    }

    $category = new Category();

    if(isset($_POST["category_ekle"])){
        $category->addCategory($_POST["name"],$_POST["icon"]);
    }

    if(isset($_POST["delete"])){
        $category->deleteCategory($_POST["delete"]);
    }

    if(isset($_POST["update"])){
        $category->updateCategory($_POST["id"],$_POST["name"],$_POST["icon"]);
    }

}else{
    session_destroy();
    header("location:../nedmin/login.php");
}


?>