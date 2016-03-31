<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class User extends Authenticatable
{



    protected $connection = 'mongodb';
    protected  $collection = 'users';

}
