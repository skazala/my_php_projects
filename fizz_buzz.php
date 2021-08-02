<?php
/*
This project prints the numbers from 1 to 100 (inclusive), except for these cases:
- If a number is a multiple of 3, it prints "Fizz".
- If a number is a multiple of 5, it prints "Buzz".
- If a number is a multiple of both 3 and 5, it prints "FizzBuzz".
*/
  $counter = 1;
  while ($counter <= 100) {
    if ($counter % 15 === 0) {
      echo "FizzBuzz \n";
      
    } elseif ($counter % 5 === 0) {
      echo "Buzz \n";

    } elseif ($counter % 3 === 0) {
      echo "Fizz \n";

    } else {
      echo $counter . "\n";
    }
    $counter++;
  }

  $output = [];

  for ($i=1; $i<=100; $i++) {
    if ($i % 15 === 0) {
      array_push($output, "FizzBuzz");
    } elseif ($i % 5 === 0) {
      array_push($output, "Buzz");
    } elseif ($i % 3 === 0) {
      array_push($output, "Fizz");
    } else {
      array_push($output, $i);
    }
  }
  
  foreach ($output as $value) {
    echo $value . "\n";  
  }
/*
This part avoids printing anything when a number is divisible by 3 ("Fizz").
And stops printing values after the first "FizzBuzz".
*/
  foreach ($output as $value) {
    if ($value === "Fizz") {
      continue;
    } elseif ($value === "FizzBuzz") {
      echo $value . "\n";
      break;
    }
    echo $value . "\n";  
  }