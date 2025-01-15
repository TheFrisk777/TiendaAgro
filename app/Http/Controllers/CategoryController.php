<?php 

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Recuperar todas las categorías con paginación
        $categories = Category::paginate(3);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mostrar el formulario de creación
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos recibidos
        $request->validate([
            'category' => 'required|string|max:255|unique:categories,category',
        ]);

        // Crear una nueva categoría
        Category::create($request->all());

        // Redirigir con un mensaje de éxito
        return redirect()->route('categories.index')->with('status', 'Categoría creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // Mostrar los detalles de una categoría específica
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // Mostrar el formulario de edición
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // Validar los datos recibidos
        $request->validate([
            'category' => 'required|string|max:255|unique:categories,category,' . $category->id,
        ]);

        // Actualizar la categoría
        $category->update($request->all());

        // Redirigir con un mensaje de éxito
        return redirect()->route('categories.index')->with('status', 'Categoría actualizada exitosamente.');
    }

    public function delete(Category $category)
    {
        echo view('admin.categories.delete', compact('category'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('status', 'Categoría eliminada exitosamente.');
    }
}
