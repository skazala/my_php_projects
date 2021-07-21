<?php
  /*
Hello there, friend! We’re exhausted having just returned to New York City from a whirlwind of world travel. 
We’re bringing all our international currency to the bank to be exchanged for USD. 
Our travels have made us wise and weary, and we want to ensure we’re being treated fairly. Can you help?

Write a program to calculate exactly how much cash in USD we should end up with after it has all been exchanged.
  */
  
  
  $riel = 2103942;
  $kyat = 19092;
  $krones = 109;
  $lek = 9094;

  echo "Riels left: " . $riel . "\n";
  echo "Kyats left: " . $kyat . "\n";
  echo "Krones left: " . $krones . "\n";
  echo "Leks left: " . $lek . "\n";

  $ex_riel = 0.000246027;
  $ex_kyat = 0.000608393;
  $ex_krones = 0.111282;
  $ex_lek = 0.00963364;
  
  echo "Converting every currencies left into dollars: \n";
  echo (int)($riel * $ex_riel) . " (Riels)\n";
  echo (int)($kyat * $ex_kyat) . " (Kyats)\n";
  echo (int)($krones * $ex_krones) . " (Krones)\n";
  echo (int)($lek * $ex_lek) . " (Leks)\n";

  $final_amount = ($riel * $ex_riel - 1) + ($kyat * $ex_kyat - 1) + ($krones * $ex_krones - 1) + ($lek * $ex_lek - 1);
  echo "Final amount of dollars after conversion: " . (int)$final_amount;
