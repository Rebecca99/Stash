<?php
	

$botToken = "269724202:AAFpLIyZGM56xd6V8lbHeK1D-Jlz9Iv9CmE";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_getcontents($website."/getupdates");

print_r($update);

?>