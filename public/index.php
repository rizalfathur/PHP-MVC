<?php

//bootstraping memanggil semua file yang ada pada app dengan hanya satu kali pemanggilan
require_once '../app/init.php';
if ( !session_id()) session_start();

//instance
$app = new App;