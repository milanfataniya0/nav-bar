<?php
$to="milanfataniya2021@gmail.com";
$subject="checking";
$message="my email";
$header = "From: milanfataniya2017@gmail.com\r\n";
if(mail($to,$subject,$message,$header)){
    echo "ok";
}
else{
    echo "no";
}

?>