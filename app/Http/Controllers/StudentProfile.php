<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentProfile extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application City.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data['module'] = 'Student';
        $data['title'] = 'Student Profile';
        return view('student.student_profile', $data);
    }

}
