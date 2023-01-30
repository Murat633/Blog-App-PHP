<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include "head.php"; 
    $db = new DB();
    $blog = $db->getOne("blog","id=:id",['id' => $_GET['id']]);
    $categories = $db->getAll("category");
    
    $user = $db->getOne("user",'email=:email or username=:username', [
        'username' => "muratakyoll533@gmail.com",
        'email' => "muratakyoll533@gmail.com"
    ]);
    
    ?>
    
</head>

<body>
    <?php include "menu/menu.php"; ?>
    <main class="admin__main">
    <form action="../db/blog.php" enctype="multipart/form-data" method="POST" class="page__settings__form">
                <div class="form-control ">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" 
                        placeholder="Blog Başlığını Giriniz..." value="<?php echo $blog["title"]?>">
                </div>
                <div class="form-control ">
                    <label for="description">Description:</label>
                    <input type="text" id="description" name="description"
                        placeholder="Blog Başlığını Giriniz..." value="<?php echo $blog["description"]?>">
                </div> 
                <div class="form-control full">
                    <label for="category">Kategori Adı:</label>
                    <select name="categoryid" id="category">
                        <?php foreach ($categories as $key => $category) { ?>
                            <option value="<?php echo $category["id"] ?>" <?php echo $category["id"] == $blog["categoryid"]?"selected":null ?>><?php echo $category["name"] ?></option>
                        <?php }?>
                    </select>
                </div> 

                <div class="form-control full">
                    <center><img width="300" src="../<?php echo $blog["img"];?>" alt=""></center>
                </div>

                <div class="form-control full">
                    <label for="blog_img" class="blog_img_label">Blog Resmi Değiştir. (İsteğe Bağlı)</label>
                    <input type="file" name="blog_img" style="display: none;" id="blog_img">
                </div> 

                <!-- Author,Userid -->
                <input type="hidden" name="blogid" value="<?php echo $blog["id"];?>">
                <input type="hidden" name="old_path" value="<?php echo $blog["img"];?>">
                
                <button name="editblog" class="page__settings__button">Güncelle</button>

              </form>
    </main>
</body>

</html>