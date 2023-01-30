<?php

$db = new DB();

$categories = $db->getAll("category");

?>

<aside class="aside">
    <div class="aside__search">
        <h1 class="aside__title"> <i class="fa-solid fa-search"></i> Arama Motoru</h1>
        <form action="search.php" method="post" class="search-form">
            <input type="search" class="search-input" name="search" placeholder="Aramak İstediğiniz Şeyi Yazın">
            <button class="search-button" type="submit"><i class="fa-solid fa-search"></i></button>
        </form>
    </div>
    <div class="aside__categories">
        <h1 class="aside__title"> <i class="fa-solid fa-folder"></i> KATEGORİLER</h1>
        <ul class="categories__category-list">   
                <a class="list__item" style="font-size: 1.3rem;" href="index.php">
                    <i style="font-size: 1.5rem;" class="fas fa-home"></i>
                        <?php if (!isset($_GET["categoryid"])) {
                               echo "<b> Anasayfa </b>";
                            }else{
                               echo "Anasayfa";
                            } ?>
                </a>             
            <?php foreach($categories as $key => $category){?>                   
                <a class="list__item" style="font-size: 1.3rem;" href="index.php?categoryid=<?php echo $category["id"] ?>">
                        <i style="font-size: 1.5rem;" class="<?php echo $category["icon"] ?>"></i>
                        <?php if (isset($_GET["categoryid"]) and $_GET["categoryid"] == $category["id"]) {
                               echo "<b>" . $category['name'] . "</b>";
                        } else {
                            echo $category['name'];
                        }?>
                </a>
            <?php } ?>
        </ul>
    </div>
</aside>