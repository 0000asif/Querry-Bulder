<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function show()
    {
        $students = DB::table("students")
        ->Paginate(4);
        // return $students;
        return view("student", ['data' => $students]);
    }
    public function singleUser(string $id)
    {
        $students = DB::table('students')->where('id', $id)->get();
        return view('singledata', ['data' => $students]);
        //return $students;
    }
    public function deleteUser(string $id)
    {
        $students = DB::table('students')->where('id', $id)->delete();
        return redirect('student')->with('success', 'Data Deleted Success.');
    }
    public function deleteall ()
    {
        $students = DB::table('students')
        //->truncate();
        ->delete();
        return redirect('student')->with('success','');
    }

    public function addUser(Request $request)
    {
        $students = DB::table('students')
            ->insert(
                [
                    'name' => $request->userName,
                    'email' => $request->userEmail,
                    'age' => $request->age,
                    'city' => $request->city,
                ]
            );
        return redirect('student')->with('success', 'Data Added success');
    }

    public function updateUser(Request $request, string $id)
    {
        $students = DB::table('students')->find($id);
        return view('update', ['data'=>$students]);
    }

    public function update(Request $request, string $id)
    {
        $students = DB::table('students')->where('id', $id)
        ->update(
            [
                'name' => $request->userName,
                'email' => $request->userEmail,
                'age'=> $request->age,
                'city'=> $request->city
            ]
            );
            return redirect('student')->with('success','Record update successfully');
    }

}
