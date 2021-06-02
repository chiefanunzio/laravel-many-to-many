<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;   
class Location extends Model
{
    protected $fillable = [
   
        'state',
        'street'   
    ];

    public function employees() {

        return $this -> hasMany(Employee::class);   
    }
}      
