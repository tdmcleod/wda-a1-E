<?php
// require the twitter library
require "twitter.lib.php";

// your twitter username and password
$username = "rmitwda1250";
$password = "now4jen!";

// initialize the twitter class
$twitter = new Twitter($username, $password);

// fetch public timeline in xml format
$xml = $twitter->getPublicTimeline();
//$xml=$twitter->getUserTimeline();

$twitter_status = new SimpleXMLElement($xml);
foreach($twitter_status->status as $status){
    foreach($status->user as $user){
       echo '<img src="'.$user->profile_image_url.'" class="twitter_image">';
       echo '<a href="http://www.twitter.com/'.$user->name.'">'.$user->name.'</a>: ';
    }
    echo $status->text;
    echo '<br/>';
    echo '<div class="twitter_posted_at">Posted at:'.$status->created_at.'</div>';
    echo '</div>';
}
?>
