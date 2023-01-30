<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include "head.php"; 
    $db = new DB();
    $blogs = $db->getAll("blog");
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
    <form action="../db/blog.php" method="POST" enctype="multipart/form-data" class="page__settings__form">
                <div class="form-control ">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" 
                        placeholder="Blog Başlığını Giriniz...">
                </div>
                <div class="form-control ">
                    <label for="description">Description:</label>
                    <input type="text" id="description" name="description"
                        placeholder="Blog Başlığını Giriniz...">
                </div> 
                <div class="form-control full">
                    <label for="category">Kategori Adı:</label>
                    <select name="categoryid" id="category">
                        <?php foreach ($categories as $key => $category) { ?>
                            <option value="<?php echo $category["id"] ?>"><?php echo $category["name"] ?></option>
                        <?php }?>
                    </select>
                </div> 

                <div class="form-control full">
                    <label for="blog_img" class="blog_img_label">Blog Resmi Ekle</label>
                    <input type="file" name="blog_img" style="display: none;" id="blog_img">
                </div> 

                
                <!-- Author,Userid -->
                <input type="hidden" name="authorid" value="<?php echo $user["id"];?>">
                
                <button name="addblog" class="page__settings__button">Ekle</button>

                <table class="table form-control full">
                    <thead class="table-head">
                        <tr class="table-row">
                            <th class="table-col">#ID</th>
                            <th class="table-col">Img</th>
                            <th class="table-col">Title</th>
                            <th class="table-col">Description</th>
                            <th class="table-col">Category ID</th>
                            <th class="table-col">Author ID</th>
                            <th class="table-col">Author</th>
                            <th class="table-col">Settings</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        <?php foreach ($blogs as $key => $blog) {?>
                            <tr class="table-row">
                            <th class="table-col">#<?php echo $blog["id"];?></th>
                            <th class="table-col">
                                <img src="../<?php echo $blog["img"];?>" width="100" alt="<?php echo $blog["title"];?>" title="<?php echo $blog["title"];?>">
                            </th>
                            <th class="table-col"><?php echo $blog["title"];?></th>
                            <th class="table-col"><?php echo $blog["description"];?></th>
                            <th class="table-col"><?php echo $blog["categoryid"];?></th>
                            <th class="table-col"><?php echo $blog["authorid"];?></th>
                            <th class="table-col"><?php echo $blog["author"];?></th>
                            <th class="table-col">
                                <a href="blog-edit.php?id=<?php echo $blog["id"];?>" title="Edit -> Düzenleme İşlemi" class="edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                <button name="delete" value="<?php echo $blog["id"];?>"  title="Delete -> Silme İşlemi" class="del"><i class="fa-solid fa-trash"></i></button>
                            </th>
                            </tr class="table-row">                   
                       <?php } ?>
                    </tbody>
                </table>
        </form>
    </main>
</body>

</html>