<?php

//  Variables that will not be changed (reasigned)

//  Traditional way:
define('APP_NAME', 'My app'); // the constant name (Uppercase), the value
define('APP_VERSION', '1.0.0.');
echo APP_NAME; //My app
echo APP_VERSION; // 1.0.0

//  Traditional use in clasess, but now we can define it on a global scope:
const DB_NAME = 'mydb';
const DB_HOST = 'localhost';

echo DB_NAME, DB_HOST; //mydblocalhost

function run()
{
    //we can use global variables here without being declare it
    echo APP_NAME;
    echo DB_NAME, DB_HOST;
}
run(); // My appmydblocalhost
