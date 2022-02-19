#!/usr/bin/env php
<?php
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '5256064377:AAFPySqw6zrcsko2LvQnVDk8ZpB1GJI6reI';
$bot_username = 'FenMasterBot';
$mysql_credentials = [
   'host'     => 'localhost',
   'user'     => 'telega',
   'password' => 'telega',
   'database' => 'telega',
];

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Enable MySQL
    $telegram->enableMySql($mysql_credentials);

    // Handle telegram getUpdates request
    $telegram->handleGetUpdates();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}