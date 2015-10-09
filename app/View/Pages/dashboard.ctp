<?php
    foreach ($cities as $key => $value) {
    foreach ($value as $key1 => $val) {
    foreach ($val as $key2 => $v) {
?>
    <p> <?php echo $key1 . " > ".$key2 ." ". $v; ?></p>

<?php
    }}}
?>