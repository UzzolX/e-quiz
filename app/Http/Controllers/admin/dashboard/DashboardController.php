<?php

namespace App\Http\Controllers\admin\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware(['teacher', 'admin']);
    // }

    public function index()
    {
        return view('admin.content');
    }

    public function stdIndex()
    {
        return view('admin.std-content');
    }
}
