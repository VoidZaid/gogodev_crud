<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>@yield('title')</title>
   @vite('resources/css/app.css')
   @yield('style')
</head>

<body class="bg-gray-900">
   @include('layouts._partials.header')
   {{-- TODO: incluimos los mensajes para que cuando redireciones de un controlador a una nista es muestre el mensa, sobre todo cuando CREAMOS/EDITAMOS --}}
   @include('layouts._partials.messages')
   <section class="max-w-6xl mx-auto text-slate-400 px-8 py-4">
      @yield('body')
   </section>
</body>

</html>
