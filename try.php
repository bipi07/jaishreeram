<?php

$text = 'Hello';
$digest = hash('md4', $text);

echo $digest;
?>