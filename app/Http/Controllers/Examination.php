<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class Examination extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
    
    public function setTerm(){
        return view('academics.setTerm');
    }
    
    public function termexamAssoc(){
        return view('academics.termExamAssoc');
    }
    
    public function createExam(){
        return view('academics.createExam');
    }
    
    public function createExamNotes(){
        return view('academics.examInstructions');
    }
    
    public function createTimetable(){
        return view('academics.examTimetable');
    }

    public function createCourse(){
        return view('academics.createCourse');
    }
    
    public function createCourseTopic(){
        return view('academics.createCourseTopic');
    }
    
    public function examBluePrint(){
        return view('academics.createExamBluePrint');
    }
    
    public function viewexamBluePrint(){
        return view('academics.viewExamBluePrint');
    }
    
    public function createQuestionPaperBluePrint(){
        return view('academics.question_paper_blueprint');
    }
}
