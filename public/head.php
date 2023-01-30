<!-- DATABASE -->
<?php
include "db/connection.php";

$getSettings = new DB();
$settings = $getSettings->getOne("settings", "id=:id",['id'=>1]);
?>


<!-- Meta Tag -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $settings["description"] ?>">
<meta name="keywords" content="<?php echo $settings["keywords"] ?>">
<!-- Css -->
<link rel="stylesheet" href="css/main.css">
<!-- FONTAWESOME -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Title -->
<title>
    <?php echo $settings["title"] ?>
</title>