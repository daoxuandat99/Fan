<?php
include 'Fan.php';
$fan1 = new Fan(3, true, 10, 'yellow');
echo $fan1->toString();
$fan2 = new Fan(2, false, 5, 'blue');
echo $fan2->toString();