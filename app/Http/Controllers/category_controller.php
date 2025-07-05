<?php

namespace App\Http\Controllers;

use App\Models\category_model;
use Illuminate\Http\Request;

class category_controller extends Controller
{
    public function categoryadd(Request $request){
        $category = new category_model(); 
        $category->name =$request->name;
        if($request->hasFile("image")){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $category->image = $imageName;
        }
        $category->save();
        return redirect("/categorylist")->with("success","category add succcesfull!");
    }
    
    public function showcategory(){
        $category = category_model::all();
        $data = $category;
        return view('pages.categoryshowlist',compact('category'));
    }

      public function destroyCategory($id)
    {
        $category = category_model::where('category_id','=',$id);
        if ($category) {
            $category->delete();
            return redirect()->back()->with('success', 'Category deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Category not found!');
        }
   
    }

     public function edit($id)
{
    $category = category_model::where('category_id',$id)->first();
    return view('pages.categoryedit', compact('category'));
}

public function update(Request $request, $id)
{
    // use correct column name
    $cat = category_model::where('category_id', $id)->first();

    if (!$cat) {
        return back()->with('error', 'Category not found.');
    }

    $cat->name = $request->input('name');

   if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $cat->image = $imageName;
        }

    $cat->save();

    $category = category_model::all();

    return view('pages.categoryshowlist',compact('category'))->with('success', 'Category updated successfully!') ;
}

public function categoryview($id)
{
    $category = category_model::findOrFail($id);
    return view('pages.categoryview', compact('category'));
}


    
}
