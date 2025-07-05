<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\category_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategorysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $category = category_model::all();

    return response()->json([
        'status' => true,
        'message' => 'Category fetched successfully',
        'data' => category_model::all()
            
        
    ]);
    }
    public function getSubcategoryListApi($id)
{

    // return "hello";
$subcategories = DB::table('sub_category')
    ->join('category', 'sub_category.category_id', '=', 'category.category_id')
    ->select('sub_category.*', 'category.name as category_name')
    ->where('sub_category.category_id', '=', $id)
    ->get();


    return response()->json([
        'status' => true,
        'message' => 'Subcategories fetched successfully.',
        'data' => $subcategories
    ]);
}
public function getSubcategoryById($id)
{
    $subcategory = DB::table('sub_category')
        ->join('category', 'sub_category.category_id', '=', 'category.category_id')
        ->select('sub_category.*', 'category.name as category_name')
        ->where('sub_category.sub_category_id', $id)
        ->first();

    if (!$subcategory) {
        return response()->json([
            'status' => false,
            'message' => 'Subcategory not found',
        ], 404);
    }

    return response()->json([
        'status' => true,
        'data' => $subcategory,
    ]);
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
