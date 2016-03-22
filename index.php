<?php
include("data.php");
include("functions.php");

$determiner[0] = fixDeterminer($noun[0], $determiner[1]);

// Handles verb plurals properly
if(checkLetter($noun[0], 'last')!='s')         
{ 
    $word = substr($noun[0], -2);
    
    if($word=='ss') { 
        $s='';     
    }
    else
    {
        $s='s';     
        if(checkLetter($verb[0], 'last')=='s') { $e='e'; } else { $e=''; } 
    } 
} 
else 
{ 
    $s='';     
    $determiner[0] = '';
}

// Handles second determiner and whether to show it or not 
if(checkLetter($noun[1], 'last')=='s') 
{ 
    $determiner[1] = '';
}

$determiner[1] = fixDeterminer($noun[1], $determiner[1]);

// Sentence is constructed here 
$sentence = $determiner[0].' '. $noun[0].' '.$verb[0].$e.$s.' '.$preposition[0].' '.strtolower($determiner[1]).' '.$noun[1].'.'; 
$sentence = ucfirst(trim($sentence));
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html class="<?php shuffle($style); echo $style[0];?>">
    <head>
        <meta charset="UTF-8">
        <title>UX Barf - Barfing up UX nonsense</title>
        <link href="barf.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link rel="apple-touch-icon" href="icon.png">          
        <link rel="stylesheet" href="css/foundation.css" />
        <link rel="stylesheet" href="css/app.css" />        
    </head>
    <body>
        <div class="row">
            <div class="small-12 columns">
                <a href="index.php"><h1><?php echo $sentence; ?></h1></a>     
            </div>
        </div>
    </body>
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-116578-41', 'auto');
    ga('send', 'pageview');

    </script>
</html>
