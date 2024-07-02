<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    function stuForm(Request $request) {
    //    DB::insert('insert into students (name,email,phone) values ("san","sam@gmail.com","456")');
    // return DB::select('select * from students');
    return view('add-student');
}

function adduser(Request $request)  {
    $name = $request->name;
    $email = $request->email;
    $phone = $request->phone;
//    DB::insert("INSERT INTO `students` (`name`, `email`, `phone`) VALUES ('$name', '$email', '$phone')");
$student = new Student();
$student->name = $name;
$student->email = $email;
$student->phone = $phone;
$student->save();
//    $data= Student::all();
         

//          return view('lists',['req'=>$data]);
    

 return redirect('list');
// if($student){
//     echo 'Add new user';
// }
    }
     function list() {
        $data= Student::all();
        return view('lists',['req'=>$data]);

     }  
    function delete($id){
    //  $isDeleted=   Db::delete("DELETE FROM `students` WHERE `students`.`id` = $id");
     $isDeleted=  Student::destroy($id);
     $data= DB::select('SELECT * FROM `students`');
     if($isDeleted){
        return redirect('list');
     }

    }

    function editStu($id)  {
    //   $data =  DB::table('students')->where('id',$id)->first();
      $data =  Student::find($id);
      return view('edit',['student'=>$data]);
    }
    function edit(Request $request)  {
       $isUpdated= DB::table('students')->where('id',$request->id)->update(['name'=>$request->name, 'email'=>$request->email,'phone'=>$request->phone]);
       if($isUpdated){
        return redirect('list');
       }
    }
}
