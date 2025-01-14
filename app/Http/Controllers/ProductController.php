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
        $products = Product::paginate(3); 
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $cat = Category::pluck('id','cat');
        return view('admin.products.create', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $cat = Category::pluck('id','cat');
        return view('admin.products.edit', compact('product','cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        $data=$request->all();
        if(isset($data["imagen"])){
            //Cambiar el nombre del archivo a cargar
            $data["imagen"]= $filename = time().".".$data["imagen"]->extension();
            //Guardar Imagen en la Carpeta Publica
            $request->imagen->move(public_path("imagen/products"),$filename);
        }
        $product->update($data);  // Actualizar los datos del producto
        return to_route('products.index')->with('status','Producto Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
