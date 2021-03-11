<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('134031415740-q040mk54h2qe65i2741u9b40bbbjoart.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('WH9v3yTO3bbvtGaQzRwzPhz7');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/googleyoutubeapi/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');



?> 