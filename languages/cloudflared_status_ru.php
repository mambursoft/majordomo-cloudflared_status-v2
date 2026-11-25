<?php
$dictionary=array(
'CLOUDFLARED_STATUS_ENDPOINT'=>'Адрес API',
'CLOUDFLARED_STATUS_METHOD'=>'HTTP-метод',
'CLOUDFLARED_STATUS_TOKEN'=>'Токен доступа',
'CLOUDFLARED_STATUS_REGION'=>'Регион / маршрут',
'CLOUDFLARED_STATUS_TRACKING'=>'Номер отправления',
'CLOUDFLARED_STATUS_PAYLOAD'=>'Шаблон POST-запроса',
'CLOUDFLARED_STATUS_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'CLOUDFLARED_STATUS_LAST'=>'Последний результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}