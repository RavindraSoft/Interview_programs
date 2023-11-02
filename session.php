<?php
ini_set('session.use_cookies', '0');
ini_set('session.use_only_cookies', '0');

$name = "ntiesh";

session_start();

$_SESSION['name'] = $name;

echo "hello" . $name;
echo "<hr>";
$sessionID = session_id();
echo "<a href='open.php?PHPSESSID=$sessionID'> chcik here to open </a>";
