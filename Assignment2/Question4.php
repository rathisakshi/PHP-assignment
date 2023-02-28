<?php
$recorded_temp = "78, 60, 62, 68, 71, 68, 85, 66, 76, 63, 76, 73,
68, 72, 73, 74, 63, 67, 65, 64, 68, 73, 79, 73";
$temp_array = explode(',', $recorded_temp);
$total = 0;
$length = count($temp_array);
foreach ($temp_array as $temp) {
    $total += $temp;
}
$avg_high_temp = $total / $length;
echo "Average Temperature : " . $avg_high_temp . "
";
sort($temp_array);
echo "five lowest temperatures :";
for ($i = 0; $i < 5; $i++) {
    echo $temp_array[$i] . ", ";
}
echo "five highest temperatures :";
for ($i = ($length - 5); $i < ($length); $i++) {
    echo $temp_array[$i] . ", ";
}
?>