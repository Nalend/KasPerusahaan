<?php
session_start();
require_once('config.php');
require_once('includes/fungsi.php');

/*
Iset : untuk mengecek ada atau tidaknya sebuah variable / data
*/
$page = isset($_GET['page']) ? $_GET['page'] :'';

//if(isset($_GET['page'])) $page = $_GET['page'];
//else $page = '';
if (!empty($page)){
    if(file_exists('pages/'.$page.'.php')){
        include 'pages/'.$page.'.php';
    }else{
        include 'pages/home.php';
    }
}else{
    include 'pages/home.php';
}
    