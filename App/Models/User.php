<?php
/**
 * Created by PhpStorm.
 * User: serb
 * Date: 4/2/16
 * Time: 1:37 AM
 */

namespace App\Models;

use App\Db;

class User
{
    public $email;
    public $name;

    public function findAll()
    {
        $db=new Db();
        return $db->query('SELECT * FROM users',
            'App\Models\User'
        );
    }
}