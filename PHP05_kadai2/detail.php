<?php
session_start();
require_once('funcs.php');
loginCheck();

$id = $_GET['id']; //?id~**を受け取る
// require_once('funcs.php');

//detail.phpの処理をmodel.phpへ移動
require_once("./model.php");
$row = get_posts_by_id($pdo,$id);

require_once("./templates/detail.php");






