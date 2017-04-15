<?php
require('autoload.php');

$db = new Database\Database;

$user_id = 1;
$result = $db->query("SELECT * FROM users WHERE id = :p1")
             ->bind(":p1", $user_id)
             ->execute()
             ->result();

print_r($result);
