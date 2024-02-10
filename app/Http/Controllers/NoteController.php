<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\NoteRequest;

// TODO: todas las peticiones de las notas la hacemos con el resource de Route, esto nos permite crear nuestro CRUD de forma mas rapida
// TODO: todos los controladores son los que se crearina por defecto si trabajamos con resource y el modelo con su modificador de --resource
class NoteController extends Controller
{
   public function index():View
   {
      $notes = Note::all();
      return View('note', ['notes' => $notes]);
   }

   public function create():View
   {
      return View('create');
   }
   // con Request vamos a recepcionar nuestra peticion la cual es enviada
   // si es get no es necesario el Request
   public function store(NoteRequest $request):RedirectResponse
   {
      // $request->validate([
      //    'title' => 'required|max:255|min:3',
      //    'description' => 'required|max:255|min:10',
      // ]);
      Note::create($request->all());
      return redirect()->route('note.index')->with('success','Nota creada exitosamente');
   }
   // funcion que nos lleva a una vista con un formulario para editar con nuestros datos previos a edicion
   public function edit(Note $note):View
   {
      return View('edit', compact('note'));
   }
   // podemos hacer lo mismo que hacemos edit, indicamos que $note es de tipo Note 
   // funcion para actualizar un registro
   public function update(NoteRequest $request,Note $note):RedirectResponse
   {
      // $note = Note::find($note);
      // $request->validate([
      //    'title' => 'required|max:255|min:3',
      //    'description' => 'required|max:255|min:10',
      // ]);
      $note->update($request->all());
      // TODO: todos los redirect desde este controlador los podemos mandar con el with() para darles a nuestras vistas un mensaje despues de que sean ejecuas y se insereten los datos correctamente
      return redirect()->route('note.index')->with('success', 'Nota actualizada exitosamente');
   }
   // funcion para ver mi nota
   public function show(Note $note):View
   {
      return View('show', compact('note'));
   }
   public function destroy(Request $request, Note $note):RedirectResponse
   {
      $note->delete();
      return redirect()->route('note.index')->with('danger','Nota eliminada');
   }

}
