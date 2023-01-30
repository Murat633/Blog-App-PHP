<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    
    include "head.php";

    $db = new DB();
    $category = $db->getAll("category");
    ?>
    
</head>

<body>
    <?php include "menu/menu.php";?>
    <main class="admin__main">
        <form action="../db/category.php" method="POST" class="page__settings__form">
                <div class="form-control ">
                    <label for="title">Kategori Adı:</label>
                    <input type="text" id="title" name="name" 
                        placeholder="Blog Başlığını Giriniz...">
                </div>
                <div class="form-control ">
                    <label for="title">Kategori Adı:</label>
                    <input type="text" id="title" name="icon"
                        placeholder="Blog Başlığını Giriniz...">
                </div>  
                
                <button name="category_ekle" class="page__settings__button">Ekle</button>

                <table class="table form-control full">
                    <thead class="table-head">
                        <tr class="table-row">
                            <th class="table-col">#ID</th>
                            <th class="table-col">Name</th>
                            <th class="table-col">FontAwesome İcon</th>
                            <th class="table-col">Settings</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        <?php foreach ($category as $key => $c) {?>
                            <tr class="table-row">
                            <th class="table-col">#<?php echo $c["id"];?></th>
                            <th class="table-col"><?php echo $c["name"];?></th>
                            <th class="table-col"><?php echo $c["icon"];?></th>
                            <th class="table-col">
                                <a href="category-edit.php?id=<?php echo $c["id"];?>" title="Edit -> Düzenleme İşlemi" class="edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                <button name="delete" value="<?php echo $c["id"];?>"  title="Delete -> Silme İşlemi" class="del"><i class="fa-solid fa-trash"></i></button>
                            </th>
                            </tr class="table-row">                   
                       <?php } ?>
                    </tbody>
                </table>
        </form>
        <br>
       
    </main>
</body>

</html>