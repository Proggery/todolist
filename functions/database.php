<?php

function getDB()
{
static $db;
if ($db instanceof PDO) {
return $db;
}

require_once CONFIG_DIR.'/database.php';

$dns = sprintf("mysql:host=%s; dbname=%s;charset=%s", DB_HOST, DB_DATABASE, DB_CHARSET);
$db = new PDO($dns, DB_USERNAME, DB_PASSWORD);
return $db;

}