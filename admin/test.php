<?php
$a = 0;
function recursion($a)
{
  if ($a < 20) {
    echo "$a\n"."<br>";
    recursion($a + 1);
  }
}
?>
