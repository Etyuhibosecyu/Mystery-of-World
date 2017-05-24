<?php
define('CHAT','Chat.programfile');
define('NAMES','Names.programfile');

if ($_POST['command'] == 'check_chat'){
if (is_readable(CHAT) == true && is_writeable(CHAT) == true){
print '1';}
else{
print '0';}}

elseif ($_POST['command'] == 'check_names'){
if (is_readable(NAMES) == true && is_writeable(NAMES) == true){
print '1';}
else{
print '0';}}

elseif ($_POST['command'] == 'read_chat'){
if (is_readable(CHAT)){
$h = fopen(CHAT,'r');
$s = fread($h,filesize(CHAT));
fclose($h);
print $s;}
else{
print '';}}

elseif ($_POST['command'] == 'read_names'){
if (is_readable(NAMES)){
$h = fopen(NAMES,'r');
$s = fread($h,filesize(NAMES));
fclose($h);
print $s;}
else{
print '';}}

elseif ($_POST['command'] == 'write_chat'){
$h = fopen(CHAT,'w');
$s = fwrite($h,$_POST['data_to_write']);
fclose($h);
print $s;}

elseif ($_POST['command'] == 'write_names'){
$h = fopen(NAMES,'w');
$s = fwrite($h,$_POST['data_to_write']);
fclose($h);
print $s;}
?>
<HTML><BODY>
<FORM method=POST>
<INPUT type='text' name='command'><BR>
<TEXTAREA type='text' name='data_to_write' rows=20 cols=283></TEXTAREA>
<INPUT type='submit' value='Send'>
</FORM>
</BODY></HTML>