<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct(){}

    public function getCompany(){
        return view('admin.company.company');
    }
}
