<!DOCTYPE html>
<html lang="en">
<head>
    <title> Server Header For Link </title>
    <meta charset="utf-8">
    <meta name="author" content="Nathan Laning">
    <meta name="description" content="TO BE ADDED">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/default_style_sheet.css" type="text/css" media="screen">

    <?php
    $debug = false;
    if (isset($_GET["debug"])) {
        $debug = true;
    }
    $domain = "//";
    $server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, "UTF-8");
    $domain .=  $server;
    $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
    $path_parts = pathinfo($phpSelf);

    print'</head>';
    print '<body id="' . $path_parts['filename'] . '">';
    if ($debug) {
        print '<p>DEBUG MODE IS ON</p>';
    }
    ?>