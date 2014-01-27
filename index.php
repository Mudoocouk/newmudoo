<?php
include './system/inc/init.php';

        // put your code here
$url = fURL::getDomain();
if ($url != 'https://stagingdev.mudoo.co.uk')
{
    fURL::redirect('https://stagingdev.mudoo.co.uk');
}

 $type    = fRequest::get('type');

if ('html' == $type) {
	include './views/index.php';
}
if ('rss' == $type) {
        include './views/rss.php';
}
