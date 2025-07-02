<?php

namespace App\Http\Controllers;

use App\Models\category_model;
use App\Models\sub_category_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class sub_category_controller extends Controller
{
     public function subcategoryadd(Request $request){
        $sub_category = new sub_category_model(); 
        $sub_category->name =$request->name;
        if($request->hasFile("image")){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $sub_category->image = $imageName;
        }
        $sub_category->category_id=$request->category_id;
        $sub_category->status=$request->status;
        $sub_category->save();
        
        return redirect("/subcategorylist")->with("success","category add succcesfull!");
    }

    public function selectcat(){
        $category = category_model::all();
        return view('pages.sub_categoryform',compact('category'));
    }
    
    public function showsubcategory()
{
   $subcategories = DB::table('sub_category')
    ->join('category', 'sub_category.category_id', '=', 'category.category_id')
    ->select('sub_category.*', 'category.name as category_name')
    ->get();

   return view('pages.sub_categoryshowlist', compact('subcategories'));
}

public function destroySubCategory($id)
    {
        $subcategory = sub_category_model::where('sub_category_id','=',$id);
        if ($subcategory) {
            $subcategory->delete();
            return redirect()->back()->with('success', 'Category deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Category not found!');
        }
   
    }

}
