<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function students(){
        $data['page_title'] = "All Students";
        return view('admin.students',$data);
    }

    public function create_new_student(Request $request){
       $validator = Validator::make($request->all(),[
           'matric_number'=>'required|unique:users|min:10|max:15',
           'email_address'=>'required|unique:users|min:8|max:200',
           'full_name'=>'required',
           'phone_number'=>'required',
           'department'=>'required',
           'level'=>'required'
       ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();

        }

        $user = new User();

        $user->matric_number =$request->matric_number;
        $user->full_name =$request->full_name;
        $user->email_address = $request->email_address;
        $user->phone_number = $request->phone_number;
        $user->dept = $request->department;
        $user->level = $request->level;
        $user->role_id =1;

        if ($user->save()){
            return back()->with('flash_info','Student has been added successfully');
        }

    }

    public function view(User $user){
        $data['page_title'] = "Student Profile";
        $data['user'] = $user;
        return view('admin.view',$data);
    }
}
