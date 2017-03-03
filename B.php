<?php
print('A');
$h=fopen('A.programfile','w');
print(fwrite($h,'A'));
fclose($h);
print('B');
?>