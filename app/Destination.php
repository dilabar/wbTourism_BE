<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Destination extends Eloquent
{
    //

    protected $connection = 'mongodb';

	protected $table  = 'destinations';

}
