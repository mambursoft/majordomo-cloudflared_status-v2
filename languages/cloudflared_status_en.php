<?php
$dictionary=array(
'CLOUDFLARED_STATUS_ENDPOINT'=>'API endpoint',
'CLOUDFLARED_STATUS_METHOD'=>'HTTP method',
'CLOUDFLARED_STATUS_TOKEN'=>'Access token',
'CLOUDFLARED_STATUS_REGION'=>'Region / route',
'CLOUDFLARED_STATUS_TRACKING'=>'Tracking number',
'CLOUDFLARED_STATUS_PAYLOAD'=>'POST payload template',
'CLOUDFLARED_STATUS_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'CLOUDFLARED_STATUS_LAST'=>'Last result'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}