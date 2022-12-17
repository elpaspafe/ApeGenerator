<?php

$base64_image = $_POST["image"];

$imageApe = base64_decode($base64_image);

$count = file_get_contents("count.txt");
file_put_contents("count.txt", intval($count)+1);

system("echo $imageApe > ./output/$count.jpg")


?>