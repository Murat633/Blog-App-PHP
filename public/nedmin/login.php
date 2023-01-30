<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    ob_start();
    session_start();
    if(isset($_SESSION["admin_email"])){
        header("location:index.php");
    }
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

    <!-- Page Title -->
    <title>Login Page</title>

</head>
<body>
    <form action="../db/authenticate.php" method="POST" class="admin-login">
        <div class="form-control">
            <label for="email_or_username">E-POSTA Veya Kullanıcı Adı</label>
            <input type="text" placeholder="-----------" name="email_or_username" id="email_or_username">
        </div>
        <div class="form-control">
            <label for="password">Parola</label>
            <input type="text" placeholder="*********" name="password" id="password">
        </div>
    
        <button name="admingiris" class="admin-login-btn">Giriş Yap!</button>
    </form>
</body>
</html>