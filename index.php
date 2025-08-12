<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <h2 class="title">For Loop</h2>

    <?php
    echo "<table>";
    for ($i = 0; $i <= 12; $i++) {
      echo "<tr>";
      for ($j = 0; $j <= 12; $j++) {
        $value = $i * $j;

        
        if ($i == 0 && $j == 0) {
          echo "<th class='corner'></th>";
        } elseif ($i == 0 || $j == 0) {
          echo "<th class='header'>" . max($i, $j) . "</th>";
        } else {
          $class = '';

          
          if ($i == $j) {
            $class = 'perfect-square';
          } elseif ($i % 2 == 0) {
            $class = 'even-row';
          } else {
            $class = 'odd-row';
          }

          echo "<td class='$class'>" . $value . "</td>";
        }
      }
      echo "</tr>";
    }
    echo "</table>";
    ?>
	
	<h2 class="title">While Loop</h2>

	<?php
    echo "<table>";
    for ($i = 0; $i <= 12; $i++) {
      echo "<tr>";
      for ($j = 0; $j <= 12; $j++) {
        $value = $i * $j;

        
        if ($i == 0 && $j == 0) {
          echo "<th class='corner'></th>";
        } elseif ($i == 0 || $j == 0) {
          echo "<th class='header'>" . max($i, $j) . "</th>";
        } else {
          $class = '';

          
          if ($i == $j) {
            $class = 'perfect-square';
          } elseif ($i % 2 == 0) {
            $class = 'even-row';
          } else {
            $class = 'odd-row';
          }

          echo "<td class='$class'>{$i}x{$j}=" . $value . "</td>";
        }
      }
      echo "</tr>";
    }
    echo "</table>";
    ?>
  </body>
</html>