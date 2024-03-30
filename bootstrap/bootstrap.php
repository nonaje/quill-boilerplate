<?php

require_once __DIR__ . '/../vendor/autoload.php';

define('APP_START', microtime(true));

try {
    \Quill\Factory\QuillFactory::make()->init();
} catch (Throwable $e) {
    dd($e);
}
