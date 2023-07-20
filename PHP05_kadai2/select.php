<?php
// 0. SESSION開始！！
session_start();
// 1. ログインチェック処理！
// 以下、セッションID持ってたら、ok
// 持ってなければ、閲覧できない処理にする。



//１．関数群の読み込み
require_once('funcs.php');
loginCheck();
//list.phpへview機能を移動
require_once("./templates/list.php");

//select.phpへviwe機能を移動
require_once("./templates/select.php");


//mode.phpへデータを取得して表示する機能を移動
require_once("./model.php");
echo get_all_posts();



