<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ImageCrudController extends Controller
{
    public $imageurl='';
    public function index(){
        return view('imageCrud');
    }
    public function store(Request $request){
        $imageurl='';
        if($image=$request->file('image')){
            $type=$image->getClientOriginalExtension();
            $name=time().'.'.$type;
            $directory='category-images/';
            $image->move($directory,$name);
            $imageurl=$directory.$name;
        }
        $student=new Student();
        $student->name=$request->name;
        $student->roll=$request->roll;
        $student->phone=$request->phone;
        $student->email=$request->email;
        $student->image= $imageurl;
        $student->save();
        return redirect()->back()->with('message','student add successfully');
    }
    public function dataviwe(){
        $students=Student::all();
        return view('dataview',['students'=>$students]);
    }
    public function dataedit($id){
        $student=Student::find($id);
        return view('dataedit',['student'=>$student]);
    }
    public function dataupdate(Request $request,$id){
        $student=Student::find($id);
        if($image=$request->file('image')){
            if(file_exists($student->image)){
                unlink($student->image);
            }
            $type=$image->getClientOriginalExtension();
            $name=time().'.'.$type;
            $directory='category-images/';
            $image->move($directory,$name);
            $this->imageurl=$directory.$name;
        }
        else{
            $this->imageurl=$student->image;
        }

        $student->name=$request->name;
        $student->roll=$request->roll;
        $student->phone=$request->phone;
        $student->email=$request->email;
        $student->image= $this->imageurl;
        $student->save();
        return redirect('/dataView')->with('message','student update successfully');
    }
    public function datadelete($id){
        $student=Student::find($id);
        if(file_exists($student->image)){
            unlink($student->image);
        }
        $student->delete();
        return redirect('/dataView')->with('message','student delete successfully');

    }
}
