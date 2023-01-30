<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "head.php"; ?>
</head>

<!-- GET Settings -->
<?php
$getSettings = new DB();
$settings = $getSettings->getOne("settings", "id=:id",['id'=>1]);

?>

<body>
    <?php include "menu/menu.php"; ?>
    <main class="admin__main">
        <div class="page__settings">
            <h1 class="title">Sayfa Ayarları</h1>
            <form enctype="multipart/form-data" action="../db/settings.php" method="POST" class="page__settings__form">
                <div class="form-control">
                    <label for="title">Sayfa Başlığı:</label>
                    <input type="text" id="title" name="title" value="<?php echo $settings["title"] ?>"
                        placeholder="Lütfen Sayfa Başlığınızı Giriniz.">
                </div>
                <div class="form-control">
                    <label for="description">Sayfa Açıklaması:</label>
                    <input type="text" id="description" value="<?php echo $settings["description"] ?>"
                        name="description" placeholder="Lütfen Sayfa Başlığınızı Giriniz.">
                </div>
                <div class="form-control full">
                    <label for="keywords">keywords:</label>
                    <textarea type="text" id="keywords" name="keywords"
                        placeholder="Lütfen Sayfa Başlığınızı Giriniz."><?php echo $settings["keywords"] ?></textarea>
                </div>
                <div class="form-control full">
                    <label for="logo_path">Web Site Logosu (ZORUNLU DEĞİL):</label>
                    <input type="file" id="logo_path" name="logo_path" placeholder="Lütfen Sayfa Başlığınızı Giriniz.">
                </div>
                <span>Mevcut LOGO ==></span>
                <img class="" width="120" src="../<?php echo $settings["logo_path"] ?>">
                <button name="page_settings" class="page__settings__button">Düzenle</button>


                <!-- Sİlme Gereksinimi Olabilir Dİye Eski Resim Adresi -->
                <input type="hidden" value="<?php echo $settings['logo_path'] ?>" name="old_path">
            </form>
        </div>
    </main>
</body>

</html>