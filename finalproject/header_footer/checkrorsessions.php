<?php
if(isset($_SESSION['username'])){
    if ($_SESSION['username']=="") {
        header("Location: /webproject/finalproject");
    }    
}


?>