<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Master extends Eloquent
{
    //

    protected $connection = 'mongodb';

	protected $table  = 'master';

}
