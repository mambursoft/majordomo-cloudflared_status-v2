<?php
$dictionary=array(
'CLOUDFLARED_STATUS_ENDPOINT'=>'Адреса API',
'CLOUDFLARED_STATUS_METHOD'=>'HTTP-метод',
'CLOUDFLARED_STATUS_TOKEN'=>'Токен доступу',
'CLOUDFLARED_STATUS_REGION'=>'Регіон / маршрут',
'CLOUDFLARED_STATUS_TRACKING'=>'Номер відправлення',
'CLOUDFLARED_STATUS_PAYLOAD'=>'Шаблон POST-запиту',
'CLOUDFLARED_STATUS_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'CLOUDFLARED_STATUS_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}