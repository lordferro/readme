<?php 
clearstatcache();
/*Список функций, результаты выполнения которых кешируются: stat(), lstat(), file_exists(), is_writable(), is_readable(), is_executable(), is_file(), is_dir(), is_link(), filectime(), fileatime(), filemtime(), fileinode(), filegroup(), fileowner(), filesize(), filetype() и fileperms().*/

if (!file_exists('foo.txt')) {
    echo 'file not exist';
    return;
}
$file = fopen('foo.txt', 'r');
while (($line = fgets($file)) !== false) {
    echo $line . '<br>';
}
fclose($file);

pathinfo();
