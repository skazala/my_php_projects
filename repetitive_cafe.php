<?php
/*
This project uses different types of loops with HTML.
*/
  $drinks = [
    "cola" => 3,
    "fanta" => 4,
    "sprite" => 5
  ];

  $pastries = ["simit", "pryanik", "donut"];
?>
<h1>Welcome to the Repetitive Cafe</h1>

<h3>Drinks!</h3>
<ul>
  <?php foreach($drinks as $drink=>$price): ?>
  <li><?="$drink: $$price"?></li>
  <?php endforeach; ?>
</ul>

<h3>Pastries! ($2 each)</h3>
<ul>
  <?php for($i=0; $i<count($pastries) ;$i++): ?>
  <li><?=$pastries[$i]?></li>
  <?php endfor; ?>
</ul>

<h3>Food! ($7 each)</h3>
<ul>
  <?php $i=0; while($i<count($food)): ?>
  <li><?php echo $food[$i]; $i++; ?></li>
  <?php endwhile; ?>
</ul>

