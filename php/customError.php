<?php   function errorHandler(int $type, string $msg, ?string $file, ?int $line)
{
    echo $type . ': ' . $msg . ' in file ' . $file . ' on line ' . $line;
    exit;
}

set_error_handler('errorHandler', E_ALL);

echo $x; ?>