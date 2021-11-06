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
        <h1 class="text-gray-600 text-center text-3xl mb-6 font-bold">¡Los mejores capacitadores del sector alimentario y ambiental!</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <a class="card-img" href="https://www.facebook.com/egresadosanech">
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/anech.png') }}" alt="">
                </a>
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">F-ANECh A.C.</h1>
                </header>

                <p class="text-sm text-center text-gray-500">Federación de Asociaciones de Egresados de Chapingo A.C.</p>
            </article>
            <article>
                <figure>
                    <a class="card-img" href="https://www.facebook.com/SOMPROAGRI">
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/somproagri.jpg') }}" alt="">
                </a>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">SOMPROAGRI A.C.</h1>
                </header>

                <p class="text-sm text-center text-gray-500">Sociedad Mexicana de Profesionales de la Agricultura</p>
            </article>
            <article>
                <figure>
                    <a class="card-img" href="https://www.facebook.com/CONAPRENC">
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/conaprenc.jpg') }}" alt="">
                </a>
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">CONAPRENC A.C.</h1>
                </header>

                <p class="text-sm text-center text-gray-500">Colegio Nacional de Profesionistas en Recursos Naturales A.C.</p>
            </article>
            <article>
                <figure>
                    <a class="card-img" href="https://www.facebook.com/redagroinnovacion">
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/red.jpeg') }}" alt="">
                </a>
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Red Agroinnovación</h1>
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

    <section class="py-12 bg-blue-700 text-center text-white">
        <h1 class="font-bold text-4xl mb-3">Ventajas</h1>
    </section>

    <section class="ventajas my-5 pt-5 bg-gris text-secondary">

        <div class="container">

        
            
            <div class="row">
                
                <div class="col-12 col-sm-6 col-md-4 mb-5">
                    <div class="card h-100 shadow">
                        <article class="card-body">
                            <i class="fas fa-laptop-code text-info d-block text-center mb-2" style="font-size:32px"></i>
                            <h1 class="text-center text-gray-600 text-2xl mb-5 font-bold">Cursos gratuitos</h1>
                            <p class="text-center">Una amplia variedad de cursos de desarrolo web gratis y en español</p>
                        </article>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4 mb-5">
                    <div class="card h-100 shadow">
                        <article class="card-body">
                            <i class="far fa-clock text-info d-block text-center mb-2" style="font-size:32px"></i>
                            <h1 class="text-center text-gray-600 text-2xl mb-5 font-bold">A tu propio ritmo</h1>
                            <p class="text-center">Estudia en tus tiempos libres y desde donde estés, con nuestros cursos online.</p>
                        </article>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4 mb-5">
                    <div class="card h-100 shadow">
                        <article class="card-body">
                            <i class="fas fa-chalkboard-teacher text-info d-block text-center mb-2" style="font-size:32px"></i>
                            <h1 class="text-center text-gray-600 text-2xl mb-5 font-bold">Precios accesibles</h1>
                            <p class="text-center">Hemos recopilado los cursos más actualizados y a los mejores precios del sector</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-blue-700 text-center text-white">
        <h1 class=" mb-3 font-bold text-4xl">¿Qué es Directo al Campo?</h1>
    </section>

    <section class="informacion mt-5 pb-5 text-secondary">

        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-12 col-md-6 col-lg-7">
                    <p style="text-align:center;" >Directo al Campo es una iniciativa para promover el conocimiento científico y técnico del sector agropecuario, nuestro objetivo es que nuestros usuarios tengan acceso a los cursos más actuales del sector agrícola al menor costo e incluso, de manera gratuita</p>
                </div>

              <center>

           
                    <img class=" img-fluid"  src="{{ asset('img/home/campo.jpg') }}" alt="">
                </center>
                
            </div>
        </div>

    </section>
<!-- Messenger plugin de chat Code -->
<div id="fb-root"></div>

<!-- Your plugin de chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<!-- Messenger plugin de chat Code -->
<div id="fb-root"></div>

<!-- Your plugin de chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "100189728578488");
  chatbox.setAttribute("attribution", "biz_inbox");

  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v12.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<section class="mt-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=+524621260398&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20%20%20." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
</section>



<link rel="stylesheet" href="css/whatsapp.css">

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

  

</x-app-layout>

</body>

</html>