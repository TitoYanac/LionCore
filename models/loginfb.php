<?php 
use Facebook\Facebook; 
session_start();
$fb = new Facebook\Facebook([
  'app_id' => '202997424586759', // Replace {app-id} with your app id
  'app_secret' => '18a5c90b418e35e9a746a0a2249cddd6',
  'default_graph_version' => 'v3.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$callbackUrl = htmlspecialchars('https://example.com/fb-callback.php');
$loginUrl = $helper->getLoginUrl($callbackUrl, $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
 ?>