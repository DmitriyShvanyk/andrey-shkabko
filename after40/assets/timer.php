<?php
date_default_timezone_set('Europe/Moscow');

$start = new DateTime();

$hour = date('H');

if ($hour >= 19 && $hour <= 24  ) {
    $date = new DateTime('+1 days');

} else {
    $date = new DateTime('+0 days');
}



$day = $date->format('d');

$m = $date->format('m');
$txtm = '';
    if($m == 1) {  $txtm = 'января';}
    if($m == 2) {  $txtm = 'февраля';}
    if($m == 3) {  $txtm = 'марта';}
    if($m == 4) {  $txtm = 'апреля';}
    if($m == 5) {  $txtm = 'мая';}
    if($m == 6) {  $txtm = 'июня';}
    if($m == 7) {  $txtm = 'июля';}
    if($m == 8) {  $txtm = 'августа';}
    if($m == 9) {  $txtm = 'сентября';}
    if($m == 10) { $txtm =  'октября';}
    if($m == 11) { $txtm =  'ноября';}
    if($m == 12) { $txtm =  'декабря';}


