<section class="bg-slate-200 capitalize">
   <header class="max-w-6xl mx-auto h-10 flex justify-between items-center px-6 font-semibold text-lg">
      <picture>
         <h1>Logo</h1>
      </picture>
      <nav class="">
         <ul class="flex justify-between gap-6">
            {{-- en el route indicamos el name, nas no la ruta, esto nos ayuda a mantener el sitio --}}
            <li><a href={{route('index')}}>Inicio</a></li>
            <li><a href={{route('note.index')}}>Notas</a></li>
            <li><a href={{route('note.create')}}>Crear nota</a></li>
         </ul>
      </nav>
   </header>
</section>