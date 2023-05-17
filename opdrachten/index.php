
<h1> <?php echo '<p>Hello World</p>'; ?></h1>

<?php
$num1 = mt_rand(1, 10);
$num2 = mt_rand(1, 10);

$plus = $num1 + $num2;
$min = $num1 - $num2;
$keer = $num1 * $num2;
$gedeeld = $num1 / $num2;

echo ($plus);
echo "<br>";
echo ($min);
echo "<br>";
echo ($keer);
echo "<br>";
echo ($gedeeld);
echo "<br>";
?> 