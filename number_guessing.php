<?php
/* In this project, I created a number guessing game. 
It will generate a random number between 1 and 10. 
You’ll run the game 10 times and get some information about your guessing abilities.
*/
  $play_count = 0;
  $correct_guesses = 0;
  $guess_high = 0;
  $guess_low = 0;

  function guessNumber() {
    global $play_count, $correct_guess, $guess_high, $guess_low;
    $play_count++;
    $number = rand(1,10);
    echo "\nMake your guess...\n";
    $guess = intval(readline(">> "));
    echo "You are on the count $play_count, my number was $number and you guessed $guess.";
    if ($number === $guess) {
      $correct_guess++;
    } elseif ($guess > $number) {
      $guess_high++;
    } else {
      $guess_low++;
    }
  }
  echo "\nI'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";
  guessNumber();
  guessNumber();
  guessNumber();
  guessNumber();
  guessNumber();
  guessNumber();
  guessNumber();
  guessNumber();
  guessNumber();
  guessNumber();

  $percent_correct = $correct_guess/$play_count * 100;

  echo "\nAfter $play_count rounds, here are some facts about your guessing:\nYou guessed the number correctly $percent_correct% of the time.\n";

  if ($guess_high > $guess_low) {
    echo "When you guessed wrong, you tended to guess high.";
  }

  if ($guess_high < $guess_low) {
    echo "When you guessed wrong, you tended to guess low.";
  }
