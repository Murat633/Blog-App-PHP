<?php
$db = new DB();
$popularFetch = $db->sqlexec("SELECT * FROM blog order by views DESC limit 4",NULL);

$populars = $popularFetch->fetchAll();
?>

<header class="header">
    <div class="header__popular-posts">
        <div class="posts">
            <?php foreach ($populars as $key => $popular) { ?>
                <div class="post"><?php echo $popular["title"]?></div>
            <?php }?>
                       
        </div>
    </div>
</header>