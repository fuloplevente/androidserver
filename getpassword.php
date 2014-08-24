<?php
$data="admin";

echo $_GET['jsoncallback'] . '(' . json_encode($data) . ');';

?>