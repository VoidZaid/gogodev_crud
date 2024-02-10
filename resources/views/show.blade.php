@extends('layouts.app')
@section('title', 'nota')
@section('body')
   <h1 class="mb-4 text-slate-200">{{$note->title}}</h1>
   <p>{{$note->description}}</p>
@endsection