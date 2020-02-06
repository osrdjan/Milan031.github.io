<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name']; // ime pošiljaoca
  $subject = $_POST['subject']; // naslov poruke
  $mailFrom = $_POST['email']; // mejl pošiljaoca
  $message = $_POST['message']; // poruka

  // if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
  //   header("Location: ../index.php?error=invalidemail");
  //   exit();
  // }
  // else {
    $mailTo = "milanuebzs@gmail.com"; // primalac
    $headers = "From: ".$mailFrom;
    $txt = "Ime: ".$name."\n\n".$message;

    mail($mailTo,$subject,$txt,$headers); // slanje mejla
    // header("Location: index.html?succes=mailsent");
  // }
}

?>