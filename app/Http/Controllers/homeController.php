<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;   

class homeController extends Controller
{
    public function homeFun(){

        $employees = Employee::all();   

        return view('pages.home', compact('employees'));   
    }
}
