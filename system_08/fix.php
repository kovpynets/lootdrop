<?php

function get_ip_list()
{
    $list = array();
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $list = array_merge($list, $ip);
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $list = array_merge($list, $ip);
    } elseif (!empty($_SERVER['REMOTE_ADDR'])) {
        $list[] = $_SERVER['REMOTE_ADDR'];
    }

    $list = array_unique($list);
    return implode(',', $list);
}

//if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
//    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
//}
$ip_user = get_ip_list();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$test = 'http://ipwhois.app/json/'.$ip_user.'?key=MFjlPagh9obyNVdk';
$geo = file_get_contents('http://ipwhois.pro/json/92.244.125.99?key=MFjlPagh9obyNVdk');
echo $test;
echo '<br>';
$geo = json_decode($geo);

echo  'IP Cloud: '.$_SERVER["HTTP_CF_CONNECTING_IP"];
echo '<br>';
echo  $ip_user;
var_dump($geo);

$nameTimezone = $geo->timezone;

//$date = new DateTime('now', new DateTimeZone($nameTimezone));

//echo $geo;

?>