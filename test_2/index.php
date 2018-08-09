<?php
/**
 * Created by Roman Melnikov <squizshee@gmail.com>
 * Date: 08.08.2018
 */

require_once __DIR__ . '/autoload.php';

$urlHelper = new \Sq\Url\UrlHelper();

$url = $urlHelper->updateUrl(
    'https://www.somehost.com/test/index.html?param1=4&param2=3&param3=2&param4=1&param5=3',
    [3],
    ['url' => '/test/index.html'],
    true
);
$urlHelper->printUrl($url);
