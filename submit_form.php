<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $emailfrom = $_POST["email"];
    $message = $_POST["message"];

    $mailto = "dohachh@outlook.fr";
    $headers = "From: ".$mailfrom;
    $txt = "You have received an e-mail from ".$name."\n\n".$message;

    mail($mailto,"email from portfolio", $txt, $headers);
    header("Location: index.php?mailsent");
}