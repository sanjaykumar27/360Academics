<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Communication extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application Module.
     *
     * @return \Illuminate\Http\Response
     */
	public function otherlogIndex() {
                $data['module'] = 'Communication';
		$data['title'] = 'Other Log';
		return view('communication.otherLog',$data);
	}
        
        public function phonelogIndex() {
                $data['module'] = 'Communication';
		$data['title'] = 'Other Log';
		return view('communication.phoneLog',$data);
	}
        
        public function appointmentIndex(){
            return view('communication.appointment');
        }

}
