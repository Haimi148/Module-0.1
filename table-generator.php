<?php
$cols = 10;
$rows = 10;

echo '<table>';
echo '<tr><th colspan="' . ($cols+1) . '">Multiplication Table</th></tr>';

// Generate table headers
echo '<tr>';
echo '<td></td>';
for ($i = 1; $i <= $cols; $i++) {
    echo '<th>' . $i . '</th>';
}
echo '</tr>';

// Generate table rows
for ($i = 1; $i <= $rows; $i++) {
    echo '<tr>';
    echo '<th>' . $i . '</th>';
    for ($j = 1; $j <= $cols; $j++) {
        echo '<td>' . $i * $j . '</td>';
    }
    echo '<td><button class="open-btn">Show Table</button></td>';
    echo '</tr>';
}

echo '</table>';
?>



<div class="popup">
    <table></table>
    <div class="close">X</div>
</div>
