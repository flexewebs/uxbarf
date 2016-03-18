<?php
$actor          = array('I', 'We', 'You', 'He', 'She', 'It', 'They');
$emotion        = array('love', 'hate', 'dislike', 'like');
$uxthing        = array('experience', 'information architecture', 'wireframes', 'design', 'users', 'sketches', 'concept', 'stakeholder', 'research');
$description    = array();

/* Sentence structure [Noun] [Verb] [Preposition] [Noun] */

$noun           = array('Design', 'Information Architecture', 'Experience', 'Blueprint', 'Solution', 'Problem', 'Stakeholder', 'Designer', '');
$verb           = array('discuss', 'will', 'think', 'wonder', 'believe', 'design');
$preposition    = array('beneath', 'to', 'up', 'as', 'in', 'for');

shuffle($noun);
shuffle($verb);
shuffle($preposition);
$sentence = $noun[0]." ".$verb[0]." ".$preposition[0];

shuffle($noun);
$sentence       = $sentence." ".strtolower($noun[1])."."; 
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $sentence; ?></title>
    </head>
    <body>
        <h1><?php echo $sentence; ?></h1>        
    </body>
</html>
