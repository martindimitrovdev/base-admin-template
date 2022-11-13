<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\BaseController;

class DashboardController extends BaseController
{
//    public function __construct()
//    {
//        //$this->middleware('auth');
//    }


    public function index()
    {
        return view('manage/dashboard/index');
    }
}
