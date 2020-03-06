<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class towmen extends Model
{
    protected $table = 'towmens';
    protected $fillable = ['name', 'phnum', 'email', 'location'];

    public function towOrders()
    {
        return $this->belongsTo('App\towOrder');
    }
}
