<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public  function adminDashboard(){
        return view('admin.dashboard');
    }


    public  function adminStudents(){
        return view('admin.students');
    }


    public  function adminExams(){
        return view('admin.exams');
    }

    public  function adminEnroll(){
        return view('admin.enroll');
    }

    public  function adminReg(){
        return view('admin.register');
    }

    public  function adminUpload(){
        return view('admin.upload');
    }
}


