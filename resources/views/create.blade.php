@extends('layouts.app')
@section('title', 'crear nota')
@section('body')
   <a class="btn-anchor " href="{{ route('note.index') }}">Regresar</a>
   {{-- @if ($errors->any())
      <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   @endif --}}
   <form method="POST" action="{{ route('note.store') }}" class="mt-10 flex flex-col w-[300px]">
      {{-- CSRF NOS PERMITE garantizar que la informacion que obtenemos es confiable y no un ataque de falsificacion --}}
      @csrf
      <label class="" for="title">Title:</label>
      <input class="@error('title') border-red-500 border-2 @enderror" type="text" name="title" id="title"
         placeholder="ingresa el titulo">
      @error('title')
         <span class="text-red-500 text-sm">{{ $message }}</span>
      @enderror

      <label class="" for="description">Description:</label>
      <input type="text" name="description" id="description" placeholder="ingresa la descripcion ">
      @error('description')
         <span class="text-red-500 text-sm">{{ $message }}</span>
      @enderror
      <input class="btn-anchor w-1/2 mx-auto mt-4" type="submit" value="guardar">
   </form>
@endsection
