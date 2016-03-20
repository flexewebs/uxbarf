<?php

include("functions.php");

//$actor          = array('I', 'We', 'You', 'He', 'She', 'It', 'They');
//$emotion        = array('love', 'hate', 'dislike', 'like');
//$uxthing        = array('experience', 'information architecture', 'wireframes', 'design', 'users', 'sketches', 'concept', 'stakeholder', 'research');
//$description    = array();

/* Sentence structure [Noun] [Verb] [Preposition] [Noun] */

// Some regular words here 
// $noun           = array('Plant', 'Book', 'Receiver', 'Fireplace', 'Door', 'Ball', 'Floor', 'Ceiling', 'Wall', 'Clock', 'Grenade', 'Tank', 'Bomb', 'Nuke', 'Atom', 'Robot', 'Laser', 'Ass', 'Balls', 'Toilet', 'Pants', 'Tea', 'Sofa', 'Carpet', 'Boy', 'TV');
// $verb           = array('run', 'jump', 'swim', 'hop', 'sprint', 'walk', 'sleep', 'eat', 'bombard', 'shoot', 'type', 'pump', 'blow', 'juice', 'destroy', 'wee', 'poo', 'whack', 'throw', 'listen', 'smell', 'watch');

$determiner     = array('The', 'A', 'An');
$noun           = array('design', 'Information Architecture', 'experience', 'blueprint', 'solution', 'problem', 'stakeholder', 'designer', 'idea', 'facts', 'Virtual Reality');
$verb           = array('discuss'); //, 'will', 'think', 'wonder', 'believe', 'design'
$preposition    = array('beneath', 'to', 'up', 'as', 'in', 'for', 'above', 'into', 'over', 'past', 'like', 'near', 'next');

shuffle($determiner);
shuffle($noun);
shuffle($verb);
shuffle($preposition);

$determiner[0] = fixDeterminer($noun[0], $determiner[1]);


if(checkLetter($noun[0], 'last')!='s') { $s='s'; } else { $s=''; } 

if(checkLetter($verb[0], 'last')=='s') { $e='e'; } else { $e=''; } 

$determiner[1] = fixDeterminer($noun[1], $determiner[1]);

$sentence = ucfirst($determiner[0]).' '. $noun[0].' '.$verb[0].$e.$s.' '.$preposition[0].' '.strtolower($determiner[1]).' '.strtolower($noun[1]).'.'; 
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html class="<?php echo $verb[0];?>">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $sentence; ?></title>
        <link href="barf.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <h1><?php echo $sentence; ?></h1>        
    </body>
</html>
