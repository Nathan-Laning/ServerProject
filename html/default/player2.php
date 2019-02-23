<!-- THIS IS THE MAIN INDEX, ALL REDIRECTS WILL BE BASED OUT OF HERE -->
<?php
include("top.php");
include("nav.php");
include("header.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>

<!--    <img src="/images/scrabblePieces.png" class="scrabblePieces"/>-->
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div10 style="width: 1000px;height: 590px ;position: absolute;background: url(/images/background.png) 0 0;left:0;"></div10>
<div style="height: 50px"></div>

<?php
//include '/files/playerData.txt';
$player =  2;
if ($fh = fopen("playerData.txt", 'r')) {
    for ($i = 0; $i < $player; $i++) {
        $line = fgets($fh);

    }
    $tileData = explode(" ", $line);
    fclose($fh);
    for ($i = 0; $i < 7; $i++) {
        $background = rand(-1, 9);
        $backgroundImage = '<div style="border-style: none; width: 106px;height: 106px ;left:';
        $backgroundImage .= ($i * 106)+50;
        $backgroundImage .= "px;position: absolute;background: url(/images/woodTextures.png) 0px ";
        $backgroundImage .= $background * 106;
        $backgroundImage .= 'px ; ;"/>';
        print $backgroundImage;
        echo "</div>";
        if($tileData[$i]!="26") {
            $letterImage = '<div style="border-style: none; width: 100px;height: 100px ;left:';
            $letterImage .= ($i * 106) + 50;
            $letterImage .= "px;position: absolute;background: url(/images/scrabblePieces.png) 0px ";
            $letterImage .= -$tileData[$i] * 100;
            $letterImage .= 'px ;"/>';
            print $letterImage;
            echo "</div>";
        }
    }
}
?>
<!--<img style="width: 100px;height: 100px ;left:100px;border: transparent; position: absolute;background: url(/images/woodTextures.png) 0 0;"/>-->

</body>
</html>


