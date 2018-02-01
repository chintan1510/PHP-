<?php
$data="a.txt";
        $dir = "/home/ambab/Downloads/";
        $dirHandle = opendir($dir);        
        while ($file = readdir($dirHandle)) {
            if($file==$data) {
                unlink($dir.$file);
                echo "success";
            }
        }

        closedir($dirHandle);

?>    