<?php
define('CHAT','Chat.programfile');
define('NAMES','Names.programfile');

if ($_POST['command'] == 'check_chat'){
if (is_readable(CHAT) == true && is_writeable(CHAT) == true){
return '1';}
else{
return '0';}}

elseif ($_POST['command'] == 'check_names'){
if (is_readable(NAMES) == true && is_writeable(NAMES) == true){
return '1';}
else{
return '0';}}

elseif ($_POST['command'] == 'read_chat'){
if (is_readable(CHAT)){
$h = fopen(CHAT,'r');
$s = fread($h,filesize(CHAT));
fclose($h);
return $s;}
else{
return '';}}

elseif ($_POST['command'] == 'read_names'{
if (is_readable(NAMES)){
$h = fopen(NAMES,'r');
$s = fread($h,filesize(NAMES));
fclose($h);
return $s;}
else{
return '';}}

elseif ($_POST['command'] == 'write_chat'{
$h = fopen(CHAT,'r');
fwrite($h,$_POST['data_to_write']);
fclose($h);}

elseif ($_POST['command'] == 'write_names'{
$h = fopen(NAMES,'r');
fwrite($h,$_POST['data_to_write']);
fclose($h);}
?>
<HTML><BODY>
<FORM>
<INPUT type='hidden' name='command'>
<INPUT type='hidden' name='data_to_write'>
</FORM>
</BODY></HTML>