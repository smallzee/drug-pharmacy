<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Drug_type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function level(){
        $data['page_title'] = "All Level";
        return view('admin.level',$data);
    }

    public function category(){
        $data['page_title'] = "Drug Category";
        return view('admin.category',$data);
    }

    public function create_new_category(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required|unique:category|min:3|max:200'
        ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();

        }

        $category = new Category([
            'name'=>$request->name
        ]);

        if ($category->save()){
            return back()->with('flash_info','Drug category has been added successfully');
        }
    }

    public function edit_category(Category $category){
        $data['page_title'] = "Edit Category";
        $data['category'] = $category;
        return view('admin.edit-category',$data);
    }


    public function update_category(Request $request){

        $validator = Validator::make($request->all(),[
            'name'=>'required|min:3|max:200'
        ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();

        }

        $category = Category::findOrFail($request->id);
        $category->name = $request->name;

        if ($category->save()){
            return back()->with('flash_info','Drug category has been updated successfully');
        }
    }

    public function drug_type(){
        $data['page_title'] = "All Drug Type";
        return view('admin.drug-type',$data);
    }

    public function update_drug_type(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required|min:3|max:200'
        ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();

        }

        $drug_type = Drug_type::findOrFail($request->id);
        $drug_type->name = $request->name;

        if ($drug_type->save()){
            return back()->with('flash_info','Drug type has been updated successfully');
        }
    }

    public function create_new_drug_type(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required|unique:drug_type|min:3|max:200'
        ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();

        }

        $drug_type = new Drug_type([
            'name'=>$request->name
        ]);

        if ($drug_type->save()){
            return back()->with('flash_info','Drug type has been added successfully');
        }
    }

    public function edit_drug_type(Drug_type $drug_type){
        $data['page_title'] = "Edit Drug Type";
        $data['category'] = $drug_type;
        return view('admin.edit-drug-type',$data);
    }

    public function drug_products(){
        $data['page_title'] = "All Drug Products";
        return view('admin.drug-products',$data);
    }
}
