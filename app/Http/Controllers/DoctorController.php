<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function get_home() {
        return view("doctor.home");
    }

    public function get_home_archive() {
        return view("doctor.home_archive");
    }

    public function get_visit(){
        return view("doctor.visit");
    }

}
