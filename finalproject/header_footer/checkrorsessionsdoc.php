<?php
if(isset($_SESSION['docname'])){
    if ($_SESSION['docname']==""||$_SESSION['doctor']==""||$_SESSION['doctor']==false) {
        header("Location: /webproject/finalproject");
    }    
}


?>