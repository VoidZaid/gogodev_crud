@if ($message=Session::get('success'))
    <span class="bg-green-500 text-white px-4 py-2 fixed bottom-0 right-0">{{ $message }}</span>
@endif
@if ($message=Session::get('danger'))
    <span class="bg-red-500 text-white px-4 py-2 fixed bottom-0 right-0">{{ $message }}</span>
@endif
{{-- Session nos va a permitir obtener datos de controlador los cuales podremos usar para pintar mensajes de exito o error, segun lo uerramos, estos mensajes son eviados con la funcion with() --}}
