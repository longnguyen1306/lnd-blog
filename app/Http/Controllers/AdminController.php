<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index() {
        return view('admin.trangChu');
    }

    public function demo() {
        return 'cc';
    }

}
