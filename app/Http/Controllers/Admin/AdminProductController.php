<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;



class AdminProductController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData["products"] = Product::paginate(5);
        return view('admin.product.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
       // dd($request);
        $request->validate([
            // Validasi nama dan price menjadi required
            "name" => "required|max:255",
            "price" => "required|numeric|gt:0",
            // Validasi required deskripsi di hilangkan
            "description",
            // Validasi image dengan required dan file harus jpg dan png, dengan maksimal ukuran file 2mb
            "image" => [
                "image",
                "required","mimes:jpg,png",
                'max:2048'
                ],
        ]);

        $newProduct = new Product();
        $newProduct->setName($request->input('name'));
        $newProduct->setDescription($request->input('description'));
        $newProduct->setPrice($request->input('price'));
        // Set image dari image yang di validasi
        $newProduct->setImage($request->file('image'));
        $newProduct->save();

        if ($request->hasFile("image")) {
            $imageName = $newProduct->getId() . "." . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newProduct->setImage($imageName);
            $newProduct->save();
        }

        session()->flash("success", "Success Message");
        return back();
    }

    public function delete($id)
    {
        Product::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit Product - Online Store";
        $viewData["product"] = Product::findOrFail($id);
        return view('admin.product.edit')->with("viewData", $viewData);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "price" => "required|numeric|gt:0",
            "image" => "image"
        ]);

        $product = Product::findOrFail($id);
        $product->setName($request->input('name'));
        $product->setDescription($request->input('description'));
        $product->setPrice($request->input('price'));

        if ($request->hasFile("image")) {
            $imageName = $product->getId() . "." . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
        }

        $product->save();
        return redirect()->route("admin.product.index");
    }
}
