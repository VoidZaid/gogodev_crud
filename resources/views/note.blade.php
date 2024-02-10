@extends('layouts.app')
@section('title', 'Notas')

@section('body')
   <h1 class="mb-4 text-slate-200">A continuacion el listado</h1>
   <ul class="mb-10">
      @forelse ($notes as $note)
         <div class="flex ">
            <div class="border-t-[1px] border-gray-700 w-1/2 last:border-b-[1px] last:bg-red-500">
               <h2 class="text-teal-300 font-semibold">
                  <a class="capitalize" href={{route('note.show', $note->id)}}>{{ $note->title }}</a>
               </h2>
               <p class="">{{ $note->description }}</p>
            </div>
            <div class="w-1/4">
               <a class="btn-anchor !bg-blue-500" href={{route('note.edit', $note->id)}}>Editar</a>
               <form action="{{route('note.destroy', $note->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input class="!bg-red-500 btn-anchor" type="submit" value="Delete">
               </form>
            </div>
         </div>
      @empty
         <li>no hay data</li>
      @endforelse
   </ul>
   <a class="btn-anchor" href={{ route('note.create') }}>crea nueva nota</a>
@endsection
