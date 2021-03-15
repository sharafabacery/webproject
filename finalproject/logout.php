<?php require_once("./header_footer/header.php")?>
<?php
if ($_SERVER['REQUEST_METHOD']=="GET") {
   $_SESSION['username']="";
   $_SESSION['id']="";
   $_SESSION['value']=-1;
   $_SESSION['docname']="";
   header("Location: /webproject/finalproject/index.php");
}
?>