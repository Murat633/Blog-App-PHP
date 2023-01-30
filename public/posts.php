<?php
$db = new DB();
if(isset($_GET["categoryid"])){
    $blogs = $db->getFilter("blog","categoryid=:categoryid",['categoryid' => $_GET["categoryid"]]);
}else{
    $blogs = $db->getAll("blog");
}
$categories = $db->getAll("category");
?>

<div class="blog-posts">
    <?php foreach ($blogs as $key => $blog) { ?>        
        <div class="post">
                <a href="blog-details.php?id=<?php echo $blog["id"]; ?>">
                    <header class="post__header">
                        <img src="<?php echo $blog["img"]?>" alt="resim" class="post__header__img">
                    </header>
                </a>
        
                <div class="post__content">
                    <h3 class="post__content__title"><?php echo $blog["title"]?></h3>
                    <p class="post__content__description"><?php echo $blog["description"]?></p>
                </div>
                <footer class="post__footer">
                    <div class="post__footer__info">
                        <div class="date">
                            <i class="fa-sharp fa-solid fa-clock"></i>
                            <span><?php $date = explode(" ",$blog["date"]); echo $date[0]; ?></span>
                        </div>
                        <div class="author">
                            <i class="fa-solid fa-user"></i>
                            <span style="text-transform: capitalize;"><?php echo $blog["author"];?></span>
                        </div>
                        <div class="category">
                        <?php foreach ($categories as $key => $category) { ?>
                        <?php if ($category["id"] ==  $blog["categoryid"]) { ?>
                            <center>
                            <i class="<?php echo $category["icon"]?>" style="font-size: 1.2rem;"></i>
                            <span>
                                <?php echo $category["name"]?>
                            </span>
                            </center>
                        <?php }}?>
                        </div>
                    </div>
                    
                    <a href="blog-details.php?id=<?php echo $blog["id"]; ?>"><button>Devamını Oku</button></a>
                </footer>
            </div>
    <?php } ?>
</div>