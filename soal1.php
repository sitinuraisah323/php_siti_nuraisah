<?php

$jml = $_GET['jml'];
 
echo "<table border=1>\n";
for ($a = $jml; $a > 0; $a--)
{
  $sum = 0;
  for ($b = $a; $b > 0; $b--)
  {
    $sum += $b;
  }
  echo "<tr>\n<td colspan=".$jml.">Total: ".$sum."</td></tr>\n";
  echo "<tr>\n";
  for ($b = $a; $b > 0; $b--)
  {
    
    echo "<td>$b</td>";
  }
  echo "</tr>\n";
}
echo "</table>";

?>
