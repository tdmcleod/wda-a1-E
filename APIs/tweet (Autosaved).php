<?php
$consumerKey    = 'ZjsZ2f4BrXGHEMJjik9vTA'; //'<insert your consumer key';
$consumerSecret = 'JCzNtWMszu8GVQeNMZtlJxcy26DBOOGtW1C9c39QELY';//'<insert your consumer secret>';
$oAuthToken     = '636650790-H3r0lNui7TDldUKieJTp0KcCCkBCCZzZnaUaXrg'; //'<insert your access token>';
$oAuthSecret    = 'JhcKw9zxGFq09zmx02tSiHGEf1gDxfDpqNF0CtaUKR0'; //'<insert your token secret>';
require_once('twitteroauth.php');
// twitteroauth.php points to OAuth.php
// all files are in the same dir
// create a new instance
$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);
 ?>
This makes the twitter instance which you can use to post updates to your stream (the user account that registers the app, is used to post the updates to!) :
// post to twitter
include 'tweet.php';  // the file where the tweet instance is created
$statusMessage = 'Movie added: '.$title. ' -> ' . $message;
$tweet->post('statuses/update', array('status' => $statusMessage));
