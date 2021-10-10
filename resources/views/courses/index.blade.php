<x-app-layout>

    {{-- Cover --}}
    <section class="bg-cover bg-center" style="background-image: url('{{ asset('img/courses/pexels-karolina-grabowska-4207908.jpg') }}');">
        <div class="max-w-7xl mx-auto px-4 py-36 sm:px-6 lg:px-8 text-white">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="font-bold text-4xl">Los mejores del sector agrícola.</h1>
                <p class="text-lg mt-2 mb-4">Si estás buscando potenciar tus conocimientos y actualizarte, has llegado al lugar adecuado. Encuentra cursos y proyectos que te ayudarán en ese proceso</p>

                @livewire('search')

            </div>
        </div>
    </section>

    @livewire('courses-index')

</x-app-layout>
