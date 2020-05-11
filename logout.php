<?php
include('gconfig.php');
$google_client->revokeToken();
session_destroy();
header('location:index.php');

?>

