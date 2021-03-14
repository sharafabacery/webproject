<?php require_once("./header_footer/header.php")?>
<?php
if ($_SERVER['REQUEST_METHOD']=="GET") {
   $_SESSION['username']="";
   $_SESSION['id']="";
   header("Location: /webproject/finalproject/index.php");
}
?>