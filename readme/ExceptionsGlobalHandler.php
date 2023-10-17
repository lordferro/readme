<?php

set_exception_handler(function (Throwable $e) {
    var_dump($e->getMessage());
});

echo array_rand([], 1);
