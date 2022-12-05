<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class AcceptRejectInfo extends Eloquent
{
    protected $connection = 'mongodb';

	protected $table  = 'accept_reject_info';
  
}
