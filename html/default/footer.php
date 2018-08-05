<!-- Footer Starts Here --!>
<?php
/* loading file info to allow mobile link*/
$domain = "//";
$directory = "/mobile/";
$server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, "UTF-8");
$domain .=  $server;
$domain .=  $directory;
$phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
$path_parts = pathinfo($phpSelf);
/* displaying mobile link */
print '<af href="';
print $domain;
print $path_parts['filename'];
print ".";
print $path_parts['extension'];
print '">Mobile Version</af>';
?>