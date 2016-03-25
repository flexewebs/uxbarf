<?php 

//$actor          = array('I', 'We', 'You', 'He', 'She', 'It', 'They');
//$emotion        = array('love', 'hate', 'dislike', 'like');
//$uxthing        = array('experience', 'information architecture', 'wireframes', 'design', 'users', 'sketches', 'concept', 'stakeholder', 'research');
//$description    = array();

/* Sentence structure [Noun] [Verb] [Preposition] [Noun] */

// Some regular words here 
// $noun           = array('Plant', 'Book', 'Receiver', 'Fireplace', 'Door', 'Ball', 'Floor', 'Ceiling', 'Wall', 'Clock', 'Grenade', 'Tank', 'Bomb', 'Nuke', 'Atom', 'Robot', 'Laser', 'Ass', 'Balls', 'Toilet', 'Pants', 'Tea', 'Sofa', 'Carpet', 'Boy', 'TV');
// $verb           = array('run', 'jump', 'swim', 'hop', 'sprint', 'walk', 'sleep', 'eat', 'bombard', 'shoot', 'type', 'pump', 'blow', 'juice', 'destroy', 'wee', 'poo', 'whack', 'throw', 'listen', 'smell', 'watch');

$style          = array('one', 'two', 'three', 'four', 'five', 'six');
$determiner     = array('The', 'A', 'An');
$noun           = array('design', 'Information Architecture', 'experience', 'blueprint', 'solution', 'problem', 'stakeholder', 'designer', 'idea', 'facts', 'Virtual Reality', 'research', 'personas', 'process', 'brand', 'visuals', 'wireframe', 'sketch', 'service', 'user journey', 'channel', 'social media', 'medium', 'web', 'app', 'technology', 'business', 'blockchain', 'IoT', 'Artificial Intelligence', 'Network', 'product', 'tools', 'ecosystem', 'system', 'dream', 'faith', 'gut feeling', 'hunch', 'app', 'platform', 'marketing', 'engagement', 'strategy', 'leadership', 'choice', 'thing', 'computer', 'smartphone', 'device', 'taxonomy', 'visual vortex', 'psychology');
$verb           = array('discuss', 'will', 'think', 'wonder', 'believe', 'design', 'develop', 'iterate', 'scrap', 'undermine', 'dislike', 'like',);
$preposition    = array('beneath', 'to', 'up', 'as', 'in', 'for', 'above', 'into', 'over', 'past', 'like', 'near', 'next');

shuffle($determiner);
shuffle($noun);
shuffle($verb);
shuffle($preposition);

?>