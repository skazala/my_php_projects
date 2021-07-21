<?php
/*
In this project, we’ll use PHP to write a function to fill in a Mad Libs story! 
Mad Libs are short stories with blank spaces, which get filled in by the user.
The result is usually funny (or strange).
*/
  function generateStory($singular_noun, $verb, $color, $distance_unit) {
    $story = "\nThe ${singular_noun}s are lovely, ${color}, and deep.\n
             But I have promises to keep,\n
             And ${distance_unit} to go before I ${verb},\n
             And ${distance_unit} to go before I ${verb}.\n";
    return $story;
  }

  echo generateStory("cake", "die", "black", "kilometers");
  echo generateStory("snake", "lie", "white", "yards");
  echo generateStory("grass", "dream", "blue", "foots");