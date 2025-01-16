<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clients = Client::paginate(3); 
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'second_last_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'required|string|max:15',
        ]);

        // Crear un nuevo cliente
        Client::create($validatedData);

        // Redirigir al índice con un mensaje de éxito
        return redirect()->route('clients.index')->with('success', 'Cliente creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
        return view('admin.clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
        return view('admin.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'second_last_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:clients,email,' . $client->id,
            'phone' => 'required|string|max:15',
        ]);

        // Actualizar los datos del cliente
        $client->update($validatedData);

        // Redirigir al índice con un mensaje de éxito
        return redirect()->route('clients.index')->with('success', 'Cliente actualizado correctamente.');

    }

    public function delete(Client $client)
    {
        echo view('admin.clients.delete', compact('client'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
        $client->delete();

        // Redirigir al índice con un mensaje de éxito
        return redirect()->route('clients.index')->with('success', 'Cliente eliminado correctamente.');
    }
}
