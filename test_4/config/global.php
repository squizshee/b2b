<?php
/**
 * Created by Roman Melnikov <squizshee@gmail.com>
 * Date: 09.08.2018
 */

return [
    'database' => [
        'host' => '127.0.0.1', // не на всех серверах настроены алиасы, поэтому используем ip
        'user' => 'rwAccessUser', // создадим пользователя с правами на чтение и запись только в нужную БД
        'password' => 'rwAccessUserPassword',
        'database_name' => 'db_name',
        'charset' => 'utf8',
    ]
];