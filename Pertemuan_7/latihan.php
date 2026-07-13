<?php
$nama   = "Bevan Tri Ramadiyas";
$nim    = "33337250063";
$ipk    = 3.85;
$aktif  = true;
$skill  = ["HTML", "CSS", "JavaScript", "Python", "PHP"];

echo "<h1>Halo, {$nama}!</h1>";
echo "<p>NIM: {$nim}</p>";
echo "<p>IPK: {$ipk}</p>";

if ($ipk >= 3.75) {
    echo "<p><strong>Status: Cumlaude 🌟</strong></p>";
} elseif ($ipk >= 3.0) {
    echo "<p>Status: Sangat Memuaskan</p>";
} else {
    echo "<p>Status: Memuaskan</p>";
}

echo "<ul>";
foreach ($skill as $item) {
    echo "<li>{$item}</li>";
}
echo "</ul>";
?>