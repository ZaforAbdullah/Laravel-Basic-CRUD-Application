<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['first_name', 'last_name', 'company_id', 'email', 'phone'];
    //protected $fillable = ['first_name', 'last_name', 'email', 'phone'];
    public function company()
    {
        return $this->hasOne('App\Company');
    }
}
