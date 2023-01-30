<?php
$db = new DB();
$popularFetch = $db->sqlexec("SELECT * FROM blog order by views DESC limit 4",NULL);

$populars = $popularFetch->fetchAll();
?>

<header class="header">
    <div class="header__popular-posts">
        <div class="posts">
            <?php foreach ($populars as $key => $popular) { ?>
                <div class="post">
                        <a class="post__link" href="blog-details.php?id=<?php echo $popular["id"]?>"></a>
                        <img class="post__img" src="<?php echo $popular["img"]?>" alt="">
                        <div class="post__content">
                            <h2 class="post__title"><?php echo $popular["title"]?></h2>
                            <p class="post__description"><?php echo substr($popular["description"],0,255)?>...</p>
                        </div>
                    </div>
            <?php }?>
                       
        </div>
    </div>
</header>