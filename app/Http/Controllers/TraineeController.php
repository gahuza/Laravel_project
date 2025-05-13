<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class TraineeController extends Controller
{
    //
    public function index(){
        $students = Student::all();
        return view('trainees.index',['students'=>$students]);
    }

    public function register(){
        return view('trainees.insert');
    }
    public function save(Request $request){
        // dd($request);
        $data = $request->validate([
            'names'=>'required',
            'email'=>'required',
            'gender'=>'required',
        ]);
        $newstudent = Student::create($data);
         return redirect(route('trainee.index'));
    }
    public function edit(Student $student){
        // dd($student);
        return view('trainees.edit',['Student' =>$student]);
    }
    public function update(Student $student, Request $request){
        $data = $request->validate([
            'names'=>'required',
            'email'=>'required',
            'gender'=>'required',
        ]);
        $student->update($data);
        return redirect(route('trainee.index'))->with('success', 'Product updated successfully');
    }
    public function delete(Student $student){
        $student->delete();
        return redirect(route('trainee.index'))->with('success', 'Product deleted successfully');
    }
}
