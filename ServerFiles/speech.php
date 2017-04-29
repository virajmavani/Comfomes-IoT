<?php
if(!empty($_POST['data'])){
$data = $_POST['data'];
$fname = "speechStatus.txt";

$file = fopen($fname, 'w+');
fwrite($file, $data);
fclose($file);
}
?>