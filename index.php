<?php
include("data.php");
include("functions.php");

$determiner[0] = fixDeterminer($noun[0], $determiner[1]);

if(checkLetter($noun[0], 'last')!='s') 
{ 
    $s='s';     
    if(checkLetter($verb[0], 'last')=='s') { $e='e'; } else { $e=''; } 
} 
else 
{ 
    $s='';     
} 

$determiner[1] = fixDeterminer($noun[1], $determiner[1]);

$sentence = ucfirst($determiner[0]).' '. $noun[0].' '.$verb[0].$e.$s.' '.$preposition[0].' '.strtolower($determiner[1]).' '.$noun[1].'.'; 
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
    </head>
    <body>
        <h1><?php echo $sentence; ?></h1>        
    </body>
</html>
