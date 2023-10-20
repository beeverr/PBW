<?php
$total = 0;
$numbers = $_GET['numbers'];

foreach ($numbers as $number) {
    $total += $number;
}
?>

<html>
    <h1>Array dengan method GET</h1>

    <p>Total = <?= $total ?></p>

</html>