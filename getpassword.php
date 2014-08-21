<?php
$data="admin";

/*you have to mention this callback compulsory*/

echo $_GET['jsoncallback'] . '(' . json_encode($data) . ');';

?>