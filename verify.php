<?php
$access_token = 'cihBWJ6Amthkr9LlnLuiOUWmA2oOV3DDLXOdAJlUeiOxyp1I3GWhB8uLCfKTRbRnhKX1nll/ENXYWXJoHuqyot2/RPpVWLEsWhMkLXMs+AAONe5UyWyLzdHrs/DBd4Jrolfq3MSRoYDTp0V2cYBhMgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
