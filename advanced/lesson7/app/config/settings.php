<?php
//Define DB credentials
const DB_HOST = '127.0.0.1';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'music_collection_full_relations';

//Paths
const BASE_PATH = '/';
const LOG_PATH = __DIR__ . '/../logs/';
const INCLUDES_PATH = __DIR__ . '/../';

//Custom error handler, so every error will throw a custom ErrorException
set_error_handler(function (int $severity, string $message, string $file, int $line): bool {
    //Still respect the @ surpassing of errors. phpstan uses it and gave me weird caching errors
    if ((error_reporting() & $severity) === 0) {
        return false;
    }
    throw new ErrorException($message, $severity, $severity, $file, $line);
});
