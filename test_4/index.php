<?php
/**
 * Created by Roman Melnikov <squizshee@gmail.com>
 * Date: 08.08.2018
 */

/**
 * Вынесем конфигурацию в отдельный файл, а лучше в отдельные файлы, каждый для своего окружения(dev/test/stage/prod/etc...)
 */
$config = require __DIR__.'/config/global.php';

/**
 * @param string $ids
 * @param PDO $pdo
 *
 * @return array
 */
function load_users_data(string $ids, PDO $pdo)
{
    $data = [];
    $tmp = explode(',', $ids);
    if (count($tmp) < 1) {
        return $data;
    }

    $userIds = [];
    foreach ($tmp as $key => $id) {
        if ((int) $id > 0) {
            $userIds[] = (int) $id;
        }
    }
    unset($tmp);

    if (empty($userIds)) {
        return $data;
    }

    $query = $pdo->query(sprintf(
        'SELECT * FROM users WHERE id IN ($in)',
        implode(',', $userIds)
    ));

    while ($user = $query->fetchObject()) {
        $data[$user->id] = $user->username;
    }

    return $data;
}

/**
 * Вывод списка пользователей, вынесено в отдельную функцию для более удобного изменения вывода
 *
 * @param $data
 */
function printUsersData($data)
{
    foreach ($data as $id => $name) {
        echo sprintf(
            '<a href="/show_user.php?id=%s">%s</a>',
            $id,
            $name
        );
    }
}

$dsn = sprintf(
    'mysql:dbname=%s;host=%s;charset=%s',
    $config['database']['database_name'],
    $config['database']['host'],
    $config['database']['charset']
);
try {
    /** Не имеет смысла подключаться к БД на каждой итерации цикла, достаточно один раз подключиться */
    $connection = new PDO($dsn, $config['database']['user'], $config['database']['password']);
    $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    /** Получим пользователей */
    $data = load_users_data($_GET['user_ids'] ?? '', $connection);

    /** Отобразим список */
    printUsersData($data);
} catch (\Exception $exception) {
    // Записать ошибку в лог и если нужно вывести ошибку для пользователя
    echo $exception->getMessage();
}
