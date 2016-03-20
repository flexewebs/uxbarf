<?php

// Returns first or last letter of a given word 
function checkLetter($word, $position='first') { 
    
    if($position == 'first') { 
        $letter = $word;
    }
    else
    {
        $letter = substr($word, -1);
    }
    
    return $letter;
}

// Check if the letter is a vowel 
function checkVowel($letter){ 
    
    $vowels = array('a', 'o', 'i', 'e', 'u');
    $isVowel = 0;
    
    for($i=0; $i<count($vowels); $i++) { 
        if($vowels[$i]==$letter) { 
            $isVowel++;            
        }
    } 
    
    return $isVowel;
}

// Fixes preposition to create a correct sentence 
function fixDeterminer($word, $determiner) { 
    $firstLetter = checkLetter($word);    
    
    if($determiner=='a') {
        if(checkVowel($firstLetter)!=0) { 
            $determiner = 'an';
        }
    } 
    
    return $determiner;
}