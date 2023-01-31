<!DOCTYPE html>
<html lang="en">


<head>
    <?php
    ob_start();
    session_start();
    include "head.php";
        $db = new DB();
        $blog = $db->getOne("blog", "id=:id", ['id' => $_GET["id"]]);
        if(!empty($blog)){
            $session = $blog["id"];
            if(!isset($_COOKIE["$session"])){
                setcookie("$session", "7987987",time()*100);
                $id = $_GET["id"];
                $db->sqlexec("UPDATE blog SET views=:views WHERE id=:id",
                [
                    'id'=>$id,
                    'views' => $blog["views"]+1
                ]);
            }else{
                setcookie("$session", "7987987",time()*100);
            }
        }else{
        header("location:index.php");
            exit;
        }
        


    ?>
</head>

<body>
    <?php include "navbar.php"; ?>
    <main class="main">
        <div class="blog-details">
            <div class="blog-detail-header">
                <h1 class="blog-detail-title"><?php echo $blog["title"] ?></h1>
                <div class="header-blog-info">
                    <span class="views">
                        <i class="fa-regular fa-eye"></i> <?php echo $blog["views"] ?>
                    </span>
                </div>
            </div>
            <img src="<?php echo $blog["img"] ?>" title="<?php echo $blog["title"] ?>" class="blog-detail-img">
            <p class="blog-detail"><?php echo $blog["description"] ?></p>
        </div>
        <?php include "aside.php"; ?>
    </main>
</body>

</html>