<?php
$primes = array();
$prime = false;
for ($i = 2; $i < 200; $i++) {
    $prime = true;
    for ($j = 2; $j <= ($i / 2); $j++) {
        if ($i % $j == 0) {
            $prime = false;
            break;
        }
    }
    if ($prime) {
        array_push($primes, $i);
    }
    if (count($primes) == 100) {
        break;
    }
}
echo array_sum($primes) . "\n";
?>