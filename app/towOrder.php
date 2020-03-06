<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class towOrder extends Model
{
	protected $table = 'towOrders';
    protected $fillable = ['carModel', 'licensePlateNumber', 'towFrom', 'towFromAddress', 'towTo', 'towToAddress'];   

    public function users()    
    {
    	return $this->hasMany('App\User');
    }

    public function towmen()    
    {
    	return $this->hasMany('App\towmen');
    }
}
