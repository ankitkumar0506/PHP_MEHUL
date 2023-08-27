<?php
echo "<pre>";
for ($row = 0; $row < 11; $row++) {
    for ($col = 0; $col <= 11; $col++) {
        if ($col == 1 or (($row == 0 or $row == 10) and ($col > 1 and $col < 10)) or ($row == 0  and $col > 1 and $col < 9)) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br/>";
}
echo "</pre>";
?>