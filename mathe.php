<?php
 
$fp = fopen('php://stdin', 'r');
 
$a=0;
$b=0;
$c=0;
$score=0;
 
for($i=0;$i <= 10;$i++)
   {
   $a = random_int(1, 10);
   $b = random_int(1, 10);
   print(" $a ");
   print(" x ");
   print("$b = ");
   $c = fgets($fp, 1024);;
   if ($c == ($a * $b))
      {
      $score++;
      }
   }
 
print("From $i you got $score correct\n");
 
?>
 
