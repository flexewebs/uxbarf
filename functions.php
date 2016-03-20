<?php

// Returns first or last letter of a given word 
function checkLetter($word, $position='first') { 
    
    if($position == 'first') { 
        $letter = $word[0];
    }
    else
    {
        $letter = substr($word, -1);
    }
    
    return $letter;
}

// Check if the letter is a vowel 
function checkVowel($letter){ 
    
    $vowels = array('a', 'o', 'i', 'e', 'u', 'A', 'I', 'E', 'O', 'U');
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
    $firstLetter    = checkLetter($word);    
    $lastLetter     = checkLetter($word, 'last');    

    if($lastLetter=='s') { 
        $determiner = 'the';
        return $determiner;
        exit;
    }
    
    if(checkVowel($firstLetter)!=0) { 
        if($determiner=='a' || $determiner=='A') {        
            $determiner = 'an';
        }
    }
    else
    {
        if($determiner=='an' || $determiner=='An') {        
            $determiner = 'a';
        }
    }
    
    return $determiner;
}