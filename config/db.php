<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => env("DB_DSN") ?: 'mysql:host=127.0.0.1;dbname=test',
    'username' => env("DB_USERNAME") ?: 'root',
    'password' => env("DB_PASSWORD")  ?: '',
    'charset' => 'utf8',
];
