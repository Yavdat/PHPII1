<?php

//function __autoload($class)
//{
//    require __DIR__."/".str_replace('\\','/',$class).'.php';
//}
require __DIR__.'/autoload.php';

$db=new \App\Db();
//$res=$db->execute('CREATE TABLE foo (id SERIAL)');
$data = $db->query('SELECT * FROM foo');
var_dump($data);