<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::paginate(5); 
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::pluck('id','category');
        return view( 'admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        if(isset($data["imagen"])){
            $data["imagen"]= $filename = time().".".$data["imagen"]->extension();
            $request->imagen->move(public_path("imagen/products"),$filename);
        }
        Product::create($data);
        return to_route('products.index')->with('status','Producto Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        $categories = Category::pluck('id','category');
        echo view('admin.products.edit', compact('categories','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //echo "Update Productos";
        //Si el campo imagen tiene informacion
        $data=$request->all();
        if(isset($data["imagen"])){
            $data["imagen"]= $filename = time().".".$data["imagen"]->extension();
            $request->imagen->move(public_path("imagen/products"),$filename);
        }
        $product->update($data);
        return to_route('products.index')->with('status','Producto Actualizado');
    }

    public function delete(Product $product)
    {
        echo view('admin.products.delete', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect()->route('products.index')->with('status', 'Producto eliminado exitosamente.');
    }
}
