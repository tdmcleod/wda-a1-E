<?php


$consumerKey    = 'TwM5uMySlQRZTtNLEcPA'; //'<insert your consumer key';
$consumerSecret = 'UjwmovLgJxVxZxxdpBfyseGzmeXkGoiyvy7EQbSeGk';//'<insert your consumer secret>';
$oAuthToken     = '775008901-xH15rK1qy35HBBSiJd4gFww9AgbAbyWH7NRyqn35'; //'<insert your access token>';
$oAuthSecret    = 'IgFlROdpdmOj7d88zTF8798b3hhNPFTRiwcZs6fPE'; //'<insert your token secret>';
require_once('APIs/twitteroauth.php');
// twitteroauth.php points to OAuth.php
// all files are in the same dir
// create a new instance
$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);

?>
