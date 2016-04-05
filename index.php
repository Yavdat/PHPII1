<?php

//function __autoload($class)
//{
//    require __DIR__."/".str_replace('\\','/',$class).'.php';
//}
require __DIR__.'/autoload.php';

$users=\App\Models\User::findAll();

//$res=$db->execute('CREATE TABLE foo (id SERIAL)');
echo '<pre>'.print_r($users,1).'</pre>';