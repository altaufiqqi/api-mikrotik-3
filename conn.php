<?php

require('routeros_api.class.php');

$API = new RouterosAPI();

if ($API->connect('203.190.113.62', 'rizal', 'kpugm21')) {
}