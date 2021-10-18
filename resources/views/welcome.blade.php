<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Directo al Campo</title>
</head>
<body>
    

<x-app-layout>

    {{-- Cover --}}
    <section class="bg-cover bg-center" style="background-image: url('{{ asset('img/home/countryside-g7fd4a2b25_1280.jpg') }}');">
        <div class="max-w-7xl mx-auto px-4 py-36 sm:px-6 lg:px-8 text-white">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="font-bold text-4xl">Bienvenido a Directo al Campo</h1>
                <p class="text-lg mt-2 mb-4">¡La nueva plataforma de capacitación del sector agrícola!</p>

                @livewire('search')

            </div>
        </div>
    </section>

    <section class="py-12">
        <h1 class="text-gray-600 text-center text-3xl mb-6">Contenido</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <a class="card-img" href="https://directoalcampo.org/courses">
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/sombrero.jpg') }}" alt="">
                </a>
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos de capacitación presencial</h1>
                </header>

                <p class="text-sm text-center text-gray-500">Asesorate con nuestro expertos en prácticas de campo mediante nuestro sistema de cursos presenciales</p>
            </article>
            <article>
                <figure>
                    <a class="card-img" href="https://directoalcampo.org/courses">
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/tablet.jpg') }}" alt="">
                </a>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Capacitación virtual</h1>
                </header>

                <p class="text-sm text-center text-gray-500">¡Aprende a tu ritmo! Capacitate con nuestros cursos pre-grabados a tu propio ritmo y obtén nuevas herramientas</p>
            </article>
            <article>
                <figure>
                    <a class="card-img" href="https://directoalcampo.org/courses">
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/infor.jpg') }}" alt="">
                </a>
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Consultoría</h1>
                </header>

                <p class="text-sm text-center text-gray-500">Obtén servicios de consultoría directamente con los expertos más calificados del sector</p>
            </article>
            <article>
                <figure>
                    <a class="card-img" href="https://directoalcampo.org/courses">
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/drones-agricultura.jpeg') }}" alt="">
                </a>
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Mantente actualizado</h1>
                </header>

                <p class="text-sm text-center text-gray-500">Mantente al día en todas las innovaciones tecnológicas de nuestra rama</p>
            </article>
        </div>
    </section>

    <section class="py-12 bg-gray-700 text-center text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl mb-3">¿No sabes qué curso llevar?</h1>
            <p class="mb-5">Dirígete al catálogo de cursos y filtralos por categoría o nivel</p>
            <a href="{{ route('courses.index') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none">Catálogo de cursos</a>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-center text-gray-600 text-3xl mb-5">Últimos cursos</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
                @foreach ($courses as $course)
                    <x-course-card :course="$course" />
                @endforeach
            </div>
        </div>
    </section>

    <footer class="py-12 bg-blue-700 text-center text-white">
     

      <div class="py-12">

    

        <ul class="list-inline text-center">
            <li class="list-inline-item">
                <a href="https://www.facebook.com/DirectoalCampoMX" target="_blank" class="text-white">
                    <i class="fab fa-2x fa-facebook" style="cursor:pointer;"></i>
                </a>
            </li>
            <li class="list-inline-item"></li>
            <li class="list-inline-item">
                <a href="https://twitter.com/" target="_blank" class="text-white">
                    <i class="fab fa-2x fa-twitter" style="cursor:pointer;"></i>
                </a>
            </li>
            <li class="list-inline-item"></li>
            <li class="list-inline-item">
                <a href="https://www.instagram.com/" target="_blank" class="text-white">
                    <i class="fab fa-2x fa-instagram" style="cursor:pointer;"></i>
                </a>
            </li>
            <li class="list-inline-item"></li>
    </ul>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <p class="py-12">directoalcampo.org | Todos los Derechos Reservados</p>
    <a href="{{ route('privacidad') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none">Aviso de Privacidad</a>
   
</div>
    </footer>

    <div class="container">
		<!-- (p>lorem)*20 (código a usar si tienes instalada la extensión emmet)-->
	</div>

	<div class="social">
		<a href="#"><img src="img/facebook.png" alt="facebook"></a>
		<a href="#"><img src="img/youtube.png" alt="youtube"></a>
		<a href="#"><img src="img/linkedin.png" alt="linkedin"></a>
		<a href="#"><img src="img/instagram.png" alt="instagram"></a>
       
	</div>

</x-app-layout>

</body>
</html>