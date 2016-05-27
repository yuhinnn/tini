<?php
//ライブラリよみこみ
require '../vendor/autoload.php'
//Slimの初期化
$app = new \Slim\Slim([]);
//Slimにルートを登録
$app->get('/',function(){
  echo 'Hello,world!';
});
//実行
$app->run();
