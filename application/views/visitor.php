<?php
$ip_address = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];

echo "IP Address: " . $ip_address . "<br>";
echo "User Agent: " . $user_agent;
