<?php

/*
 * registration response:
 * 0: username reserved
 * 1: registration ok
*/

$data=1; 

echo $_GET['jsoncallback'] . '(' . json_encode($data) . ');';

?>