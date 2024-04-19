<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //index function to return dashboard page
    public function index()
    {
        return view('admin.home');
    }
}
