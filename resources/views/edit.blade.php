@extends('layouts.app')
@section('title', 'editar')
@section('body')
   <h1>pagina de edicion</h1>

   <form method="POST" action="{{ route('note.update', $note->id) }}" class="mt-10 flex flex-col w-[300px]">
      {{-- en html no existe el metodo put, por ello en laravel podemo poner la directivas PUT para indicar que vamos a enviar un dato --}}
      @method('PUT')
      @csrf
      <label class="" for="title">Title:</label>
      <input class="@error('title') border-red-500 @enderror" type="text" name="title" id="title" placeholder="ingresa el nuevo titulo" value="{{ $note->title }}">
      @error('title')
         <span class="text-red-500 text-sm">{{ $message }}</span>
      @enderror
      <label class="" for="description">Description:</label>
      <input type="text" name="description" id="description" placeholder="ingresa la nueva descripcion "
         value="{{ $note->description }}">
      @error('description')
         <span class="text-red-500 text-sm">{{ $message }}</span>
      @enderror
      <input class="btn-anchor w-1/2 mx-auto mt-4" type="submit" value="actualizar">
   </form>
@endsection
