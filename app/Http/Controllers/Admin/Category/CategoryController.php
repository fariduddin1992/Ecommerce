<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Model\Admin\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function category () {

        $categories = Category::all();
        return view('admin.Category.category',compact('categories'));
    }
    public function storecategory (Request $request) {

        $validateData = $request->validate([
            'category_name' => 'required|unique:categories|max:255'
        ]);

        // $data = Array();
        // $data['category_name'] = $request->category_name;
        // DB::table('categories')->insert($data);

        $category = new Category;
        $category->category_name = $request->category_name;
        $category->created_at = Carbon::now();
        $category->save();
        $notification = array(

            'messege'=>'Category added Successfully',
            'alert-type'=>'success'
        );
        return  redirect()->back()->with($notification);

    }
}
