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
    // Start building the table
    echo "<table>";

    // Outer loop: rows (1 to 12)
    for ($i = 1; $i <= 12; $i++) {
      echo "<tr>"; // Start a new table row

      // Inner loop: columns (1 to 12)
      for ($j = 1; $j <= 12; $j++) {
        $value = $i * $j; // Calculate multiplication result

        // Top-left corner cell (1x1)
        if ($i == 1 && $j == 1) {
          echo "<th class='corner'>1</th>";
        }
        // First row or first column (headers)
        elseif ($i == 1 || $j == 1) {
          echo "<th class='header'>" . max($i, $j) . "</th>";
        }
        // Normal table cells (results)
        else {
          $class = '';

          // Apply CSS classes based on the cell type
          if ($i == $j) {
            $class = 'perfect-square'; // Highlight perfect squares
          } elseif ($i % 2 == 1) {
            $class = 'even-row'; // Odd row index (but named even-row in CSS)
          } else {
            $class = 'odd-row'; // Even row index (but named odd-row in CSS)
          }

          // Output the table cell with the result
          echo "<td class='$class'>" . $value . "</td>";
        }
      }

      echo "</tr>"; // End of the current row
    }

    echo "</table>"; // End of the table
    ?>
	
	<h2 class="title">While Loop</h2>

	<?php
    // Start building the table
    echo "<table>";

    // Outer loop: rows (1 to 12) - Using a for loop, but could be while
    for ($i = 1; $i <= 12; $i++) {
      echo "<tr>"; // Start a new table row

      // Inner loop: columns (1 to 12)
      for ($j = 1; $j <= 12; $j++) {
        $value = $i * $j; // Calculate multiplication result

        // Top-left corner cell (1x1)
        if ($i == 1 && $j == 1) {
          echo "<th class='corner'>1x1=1</th>";
        }
        // First row or first column (headers) showing the full multiplication
        elseif ($i == 1 || $j == 1) {
          echo "<th class='header'>" . ($i ?: 1) . "x" . ($j ?: 1) . "=" . (($i ?: 1) * ($j ?: 1)) . "</th>";
        }
        // Normal table cells (results)
        else {
          $class = '';

          // Apply CSS classes based on the cell type
          if ($i == $j) {
            $class = 'perfect-square'; // Highlight perfect squares
          } elseif ($i % 2 == 1) {
            $class = 'even-row'; // Odd row index (but named even-row in CSS)
          } else {
            $class = 'odd-row'; // Even row index (but named odd-row in CSS)
          }

          // Output the table cell with the multiplication expression
          echo "<td class='$class'>{$i}x{$j}=" . $value . "</td>";
        }
      }

      echo "</tr>"; // End of the current row
    }

    echo "</table>"; // End of the table
    ?>
  </body>
</html>
