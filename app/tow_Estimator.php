<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tow_Estimator extends Model
{
	protected $table = 'tow_Estimators';
     protected $fillable = ['towFrom', 'towTo', 'price'];
}
