<?php
include "connection.php";
ob_start();
session_start();

class Authenticate extends DB {

    public function adminLogin($email,$password){
        $email_or_username = htmlspecialchars($email);
        echo $admin_password = md5(sha1($password));
        
        // DB
        $getuser = $this->sqlexec("SELECT * FROM user WHERE username=:usernameoremail OR email=:usernameoremail AND password=:password",
        [
            'usernameoremail' => $email_or_username,
            'password' => $admin_password
        ]);

        $tableLength = $getuser->rowCount();

        if($tableLength == 1) {
            $_SESSION["admin_email"] = $email_or_username;
            header("location:../nedmin/index.php");
        }else{
            header("location:../nedmin/login.php?isOk=no");
        }
    }
}


if(isset($_POST["admingiris"])){
    $auth = new Authenticate();

    $auth->adminLogin($_POST["email_or_username"], $_POST["password"]);
}
?>