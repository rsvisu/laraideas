<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Recuperar ideas del usuario actual
        $ideas = Idea::where('user_id', auth()->id())->get();
        return view('ideas', ['ideas' => $ideas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Devolver la lista para crear una idea
        return view('idea');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // TODO: validar los datos

        // Recuperamos los campos para crear la idea
        $title = $request->get('title');
        $description = $request->get('description');
        $user_id = auth()->id();

        // Creamos la idea
        $idea = new Idea();
        $idea->title = $title;
        $idea->description = $description;
        $idea->user_id = $user_id;
        $idea->is_public = false;

        $idea->save();

        // Redirigimos de vuelta
        return redirect()->back()->with('created', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Idea $idea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idea $idea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Idea $idea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Recuperamos la id buscandola junto al usuario
        $idea = Idea::where('id', $id)
                    ->where('user_id', auth()->id())
                    ->first();  // Aqui se podria poner firstOrFail() y no hacer el if del abort()

        // Si no hay idea devolvemos un 404 y terminamos
        if (!$idea) {
            abort(404);
        }

        // Si hay, la borramos
        $idea->delete();

        // Por ultimo redirigimos
        return redirect()->back()->with('success', true);
    }
}
