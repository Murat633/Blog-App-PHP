<?php
$db = new DB();
$categories = $db->getAll("category");
?>

<nav class="navbar">
    <div class="logo-box">
        <a href="index.php"><img width="70" src="<?php echo $settings["logo_path"] ?>" alt=""></a>
    </div>
    <ul class="navbar__links">
        <li class="links__item"><a href="index.php" class="item__link">Anasayfa</a></li>
        <li class="links__item"><a href="#" class="item__link">Hakkımızda</a></li>
        <li class="links__item"><a href="#" class="item__link">Iletişim</a></li>
        <li class="links__item toggle">
            <a href="#" class="item__link">Kategoriler <i class="fa-solid fa-caret-down"></i></a>
            <ul class="toggle-list">
                <?php foreach ($categories as $key => $category) {?>
                    <li class="toggle-list__list-item"><a href="?categoryid=<?php echo $category["id"]?>" class="list-item__link"><?php echo $category["name"]?></a></li>
               <?php }?>               
            </ul>
        </li>
    </ul>
</nav>



<script>
    const toggle = document.querySelectorAll(".links__item.toggle");

    const toggleIsActive = (e) => {
        const item = e.target
        if (item.classList.contains("item__link")) {
            item.parentElement.classList.toggle("active")
        }
        item.classList.toggle("active")
    }



    toggle.forEach(tog => {
        tog.addEventListener("click", toggleIsActive)
    });


</script>