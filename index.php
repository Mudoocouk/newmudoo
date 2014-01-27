<?
echo 'this is just in testing times so will need to be updated soon.';
        // put your code here
include './system/inc/init.php';

$type    = fRequest::get('type');
$meetups = Meetup::findCurrent();

if ('html' == $type) {
	include './views/index.php';
}
if ('rss' == $type) {
	include './views/rss.php';	
}
?>