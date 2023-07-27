<?php
$data = $_GET['dataxml'];
file_put_contents("dataNilai.xml", $data);
?>