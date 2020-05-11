<?php
require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('511169040195-qkhpdmr7pbddiuts0fobkursvmr3o677.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('7GB8iJN49GwH3Xh2T5DopM6I');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/google/dashboard.php');


$google_client->addScope('email');

$google_client->addScope('profile');


session_start();

?>