<?php

include "connection.php";


class Settings extends DB 
{
    public function update() {
        try {
            $title = htmlspecialchars($_POST["title"]);
            $description = htmlspecialchars($_POST["description"]);
            $keywords = htmlspecialchars($_POST["keywords"]);
            $logo = $_FILES["logo_path"];
            $folderPath = "../img";
            $logo_tmp_name = htmlspecialchars($logo["tmp_name"]);
            $logo_name = htmlspecialchars($logo["name"]);
            $randomNumber4 = rand(20000, 8978989);
    
            $old_path = $_POST["old_path"];
    
            if ($logo_name == "") {
                $logoAndPath = $old_path;
            } else {
                $logoAndPath = substr($folderPath, 3) . "/" . $randomNumber4 . $logo_name;
                unlink("../$old_path");
            }
    
            $saveSettings = $this->sqlexec("UPDATE settings SET title=:title,description=:description,keywords=:keywords,logo_path=:logo_path WHERE id=:id",
            [
                'title' => $title,
                'description' => $description,
                'keywords' => $keywords,
                'logo_path' => $logoAndPath,
                'id' => 1
            ]);
    
            if ($saveSettings) {
                @move_uploaded_file($logo_tmp_name, "$folderPath/$randomNumber4$logo_name");
                header("location:../nedmin/page-settings.php?is=ok");
            } else {
                header("location:../nedmin/page-settings.php?is=no");
            }
    
        } catch (Exception $err) {
            echo $err->getMessage();
        }
    }
}



    $s = new Settings();


    if (isset($_POST["page_settings"])) {
        $s->update();
    }

?>