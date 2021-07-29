<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Drug_type;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        $data['page_title'] = "Dashboard";

        $data['total_admin'] = User::where('role_id','>',1)->count();
        $data['total_students'] = User::where('role_id',1)->count();
        $data['total_drug_type'] = Drug_type::count();
        $data['total_drug_category'] = Category::count();

        return view('admin.dashboard',$data);
    }
}
