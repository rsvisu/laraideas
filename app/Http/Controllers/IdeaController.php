<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class IdeaController extends Controller
{

    // ==== Funciones ====

    /**
     * Find the idea by id and checks if is of the actual user
     * @param $id
     * @return Idea
     */
    private function findIdeaOrFail($id): Idea
    {
        // Recuperamos la id buscandola junto al usuario
        $idea = Idea::where('id', $id)
            ->where('user_id', auth()->id())
            ->first();  // Aqui se podria poner firstOrFail() y no hacer el if del abort()
        // Si no hay idea devolvemos un 404 y terminamos
        if (!$idea) {
            abort(404);
        }

        // Si hay, la devolvemos
        return $idea;
    }

    /**
     * Finds the ideas of the actual user
     * @return Collection
     */
    private function findIdeas(): Collection
    {
        return Idea::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
    }

    /**
     * Finds and paginates the ideas of the actual user
     * @return Collection
     */
    private function findAndPaginateIdeas($perPage)
    {
        return Idea::where('user_id', auth()->id())->orderBy('created_at', 'desc')->paginate($perPage);
    }

    // ==== CRUD ====

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Recuperar ideas del usuario actual
        $ideas = $this->findAndPaginateIdeas(9);
        // Se lo pasamos a la vista
        return view('ideas.index', ['ideas' => $ideas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Devolver la lista para crear una idea
        return view('ideas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validamos los datos
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string']
        ]);

        // Recuperamos los campos para crear la idea
        $title = $data['title'];
        $description = $data['description'];
        $user_id = auth()->id();

        // Creamos la idea
        $idea = new Idea();
        $idea->title = $title;
        $idea->description = $description;
        $idea->user_id = $user_id;
        $idea->is_public = false;

        $idea->save();

        // Redirigimos de vuelta
        return redirect()->route('ideas.create')->with('success', true);
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
    public function edit($id)
    {
        // Recuperamos la idea
        $idea = $this->findIdeaOrFail($id);

        // Se lo pasamos a la vista
        return view('ideas.edit', ['idea' => $idea]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validamos los datos
        $data = $request->validate([
            'title' => ['string', 'nullable', 'max:255'],
            'description' => ['string', 'nullable']
        ]);

        // Recuperamos la idea
        $idea = $this->findIdeaOrFail($id);

        // Guardamos el titulo
        $old_title = $idea->title;

        // Recorremos los atributos de data y si el valor
        // no es null, actualizamos el valor del atributo
        foreach ($data as $attribute => $value) {
            if (!is_null($value)) {
                $idea->$attribute = $value;
            }
        }

        // Guardamos los cambios de la idea
        $idea->save();

        // Por ultimo redirigimos
        return redirect()->route('ideas.index')->with('updated', true)->with('title', $old_title);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Recuperamos la idea
        $idea = $this->findIdeaOrFail($id);

        // Si hay, la borramos
        $idea->delete();

        // Por ultimo redirigimos
        return redirect()->route('ideas.index')->with('deleted', true)->with('title', $idea->title);
    }
}
