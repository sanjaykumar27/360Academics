<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of the routes that are handled
  | by your application. Just tell Laravel the URIs it should respond
  | to using a Closure or controller method. Build something great!
  |
 */

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('home', 'HomeController@index');
Route::get('teacherHome', function(){
    return view('teacherHome');
});

Route::get('parentHome', function(){
    return view('parentHome');
});


Route::get('updatetimezone/{time}', function ($time) {
    \Cookie::queue('timezone', $time, 43200);
});

Route::get('create_student', 'CreateStudentController@index');

Route::get('get_class', 'CreateStudentController@getClass');
Route::get('get_section', 'CreateStudentController@getSection');
Route::get('get_gender', 'CreateStudentController@getGender');
Route::get('get_category', 'CreateStudentController@getCategory');
Route::get('get_studenttype', 'CreateStudentController@getStudentType');
Route::get('get_suburb', 'CreateStudentController@getSuburb');

Route::get('sub_teach_assoc', 'timetable@createClassSubAssoc');
Route::get('timetable_season_group', function() {
    return View::make('academics.createSeasonGroup');
});

Route::get('editor', 'timetable@season');


Route::get('collection_type', 'CollectionTypeController@index');
Route::get('get_collectiontype_list', 'CollectionTypeController@collectiontypeList');
Route::get('get_all_collectiontype_list', 'CollectionTypeController@allCollectiontypeList');
Route::post('collectiontype_save', 'CollectionTypeController@collectiontypeSave');

Route::get('collection', 'CollectionController@index');
Route::get('get_collection_list', 'CollectionController@collectionList');
Route::get('get_all_collection_list', 'CollectionController@allCollectionList');
Route::post('collection_save', 'CollectionController@collectionSave');

Route::get('season_collection', 'timetable@getSeason');
Route::get('get_season', 'timetable@collectionIndex');

Route::get('student_profile', 'StudentProfile@index');

Route::get('other_log', 'Communication@otherlogIndex');
Route::get('phone_log', 'Communication@phonelogIndex');
Route::get('appointment', 'Communication@appointmentIndex');

Route::get('showother_log', 'Communication@otherlogIndex');
Route::get('phone_log', 'Communication@phonelogIndex');
Route::get('appointment', 'Communication@appointmentIndex');

Route::get('view_timetable', 'timetable@view_timetable');

Route::get('timetable_master', 'timetable@timetableMaster');
Route::get('class_teacher_allocation', 'timetable@classTeacherAllocation');

Route::get('set_term', 'Examination@setTerm');
Route::get('term_exam_assoc', 'Examination@termexamAssoc');
Route::get('create_exam', 'Examination@createExam');
Route::get('create_exam_notes', 'Examination@createExamNotes');

Route::get('exam_timetable', 'Examination@createTimetable');

Route::get('set_course', 'Examination@createCourse');
Route::get('course_topic_distribution', 'Examination@createCourseTopic');

Route::get('exam_blueprint', 'Examination@examBluePrint');

Route::get('view_exam_blueprint', 'Examination@viewexamBluePrint');
Route::get('create_questionpaper_blueprint', 'Examination@createQuestionPaperBluePrint');

// -------------------------------- TEST ------------------------------------ // 
Route::get('feecollection', function() {
    return View::make('test.feecollection');
});

Route::get('daily_report', function() {
    return View::make('reports.dailyReport');
});

Route::get('mark_attendance', function() {
    return View::make('academics.markAttendance');
});

Route::get('co_scholastic_master', function() {
    return View::make('academics.coScholasticMaster');
});

Route::get('co_scholastic_assoc', function() {
    return View::make('academics.coScholasticAssoc');
});

Route::get('create_co_scholastic_assoc', function() {
    return View::make('academics.createCoScholasticAssoc');
});

Route::get('marks_distribution', function() {
    return View::make('academics.marksDistribution');
});

Route::get('create_marks_distribution', function() {
    return View::make('academics.createMarksDistribution');
});

Route::get('input_marks', function() {
    return View::make('academics.inputMarks');
});

Route::get('display_marks', function() {
    return View::make('academics.displayMarks');
});

Route::get('green_sheet', function() {
    return View::make('academics.greenSheet');
});


Route::get('verifiy_marks', function() {
    return View::make('admin.verifyMarks');
});

Route::get('course_mapping', function() {
    return View::make('academics.courseMapping');
});

Route::get('student_registration',  function (){
    return View::make('student.studentOnlineRegistration');
});

Route::get('student_registration_review',  function (){
    return View::make('student.studentOnlineRegistrationReview');
});

Route::get('student_registration_confirmation',  function (){
    return View::make('student.studentOnlineRegistrationConfirmation');
});

Route::get('print_registration_form',  function (){
    return View::make('student.printRegistrationForm');
});

Route::get('verify_student_registration',  function (){
    return View::make('admin.studentRegistration');
});

Route::get('set_syllabus',  function (){
    return View::make('admin.setSyllabus');
});