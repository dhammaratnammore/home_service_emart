<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // ✅ API list
    public function list()
    {
        return Product::all();
    }

    // ✅ Add product form submission
   public function productadd(Request $request)
{
    $product = new Product();

    $product->p_name = $request->p_name;
    $product->p_price = $request->p_price;
    $product->p_description = $request->p_description;

    if ($request->hasFile('p_image')) {
        $imageName = time() . '.' . $request->p_image->extension();
        $request->p_image->move(public_path('uplode'), $imageName);
        $product->p_image = $imageName;
    }

    $product->save();

    return redirect()->route('productlist')->with('success', 'Product added successfully!');
}


    // ✅ Show all products (blade)
    public function showproduct()
    {
        $productlist = Product::all();
        return view('pages.productshowlist', compact('productlist'));
    }

    // ✅ View single product
    public function productview($id)
    {
        $product = Product::where('product_id', $id)->firstOrFail();
        return view('pages.productview', compact('product'));
    }

    // ✅ Edit product
    public function edit($id)
    {
        $product = Product::where('product_id', $id)->firstOrFail();
        return view('pages.productedit', compact('product'));
    }

    // ✅ Update product
    public function update(Request $request, $id)
    {
        $product = Product::where('product_id', $id)->firstOrFail();

        $product->p_name = $request->p_name;
        $product->p_price = $request->p_price;
        $product->p_description = $request->p_description;

        if ($request->hasFile('p_image')) {
            $file = $request->file('p_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $product->p_image = $filename;
        }

        $product->save();

        return redirect()->route('productlist')->with('success', 'Product updated successfully!');
    }

    // ✅ Delete product
    public function destroy($id)
    {
        $product = Product::where('product_id', $id)->first();

        if ($product) {
            $product->delete();
            return redirect()->back()->with('success', 'Product deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Product not found!');
        }
    }
}
