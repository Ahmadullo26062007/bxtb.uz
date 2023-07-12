<?php

$name=$_POST['name'];
$number=$_POST['number'];
$message=$_POST['message'];

$array=array(
    'ism: '=>$name,
    'Telefon raqam: '=>$number,
    'xabar: '=>$message,
);

print_r($array);
