<?php
$to = "foulagar@gmail.com";
$subject = "test";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" ;

$sending=mail($to,$subject,$txt,$headers);

if ($sending==false) {
    echo ('not sent');
} else {

    echo('sent succesfully');
}

?>
