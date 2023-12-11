<?php
$IpAddress = $_SERVER["REMOTE_ADDR"];
$TimeStamp = time();
$DateTime = date("d.m.Y H:i:s", $TimeStamp);

function Security($Value) {
    $Trim = trim($Value);
    $StripTags = strip_tags($Trim);
    $SpecialChars = htmlspecialchars($StripTags);
    $Result = $SpecialChars;
    return $Result;
}
?>