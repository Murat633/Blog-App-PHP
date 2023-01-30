<?php
ob_start();
session_start();
include "../db/connection.php";
 ?>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- admin css -->
<link rel="stylesheet" href="../css/admin.css">
<!-- FONTAWESOME -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php
    if(!isset($_SESSION["admin_email"])){
        header("location:login.php");
    }
?>

<!-- Page Title -->
<title>Admin Kontrol Panel</title>