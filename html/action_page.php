<?php

$name = $email = $phone= $message= "";
if($_POST)
{
$name = $_POST('name');

$phone= $_POST('phone');

$email = $_POST('email');

$message = $_POST('message');
echo "Mesajınız Gönderildi";
}
?>