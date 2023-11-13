<?php
include "header.php";
if (isset($_GET["act"]) &&($_GET['act']!= "")) {
    $act=$_GET["act"];
   
    switch ($act) {
        case 'listtk':
            include "./taikhoan/list.php";
            break;
        case"addtk":
            include "./taikhoan/add.php";
            break;

        
    }

}else
{
    include "main.php";
}

include "footer.php";
?>