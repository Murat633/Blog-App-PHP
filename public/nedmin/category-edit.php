<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    
    include "head.php";

    $db = new DB();
    $category = $db->getOne("category","id=:id",['id'=>$_GET["id"]]);
    ?>
    
</head>

<body>
    <?php include "menu/menu.php";?>
    <main class="admin__main">
        <form action="../db/category.php" method="POST" class="page__settings__form">
                <div class="form-control ">
                    <label for="title">Kategori Adı:</label>
                    <input type="text" id="title" name="name" value="<?php echo $category["name"]?>"
                        placeholder="Blog Başlığını Giriniz...">
                </div>
                <div class="form-control ">
                    <label for="title">Kategori Adı:</label>
                    <input type="text" id="title" name="icon" value="<?php echo $category["icon"]?>"
                        placeholder="Blog Başlığını Giriniz...">
                </div>  


                <input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
                <button name="update" class="page__settings__button">Düzenle</button>
        </form>
        <br>
       
    </main>
</body>

</html>