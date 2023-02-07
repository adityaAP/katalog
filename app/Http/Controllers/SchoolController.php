<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function student()
    {
        return view('page/detail-student');
    }

    public function school()
    {
        return view('page/school');
    }
    public function school_list()
    {
        return view('page/school-list');
    }
}
