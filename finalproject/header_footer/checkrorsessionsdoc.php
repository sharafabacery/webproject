<?php
if(isset($_SESSION['username'])){
    if ($_SESSION['username']==""||$_SESSION['doctor']==""||$_SESSION['doctor']==false) {
        header("Location: /webproject/finalproject");
    }    
}


?>