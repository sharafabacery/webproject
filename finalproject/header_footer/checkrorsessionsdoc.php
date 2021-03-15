<?php
if(isset($_SESSION['docname'])){
    if ($_SESSION['docname']=="") {
        header("Location: /webproject/finalproject");
    }    
}elseif(isset($_SESSION['doctor'])){
    if ($_SESSION['doctor']==false) {
        header("Location: /webproject/finalproject");
    }    
}


?>