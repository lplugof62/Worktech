<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Worktech</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous"> -->
</head>

<body>

    <header class="header">

        <div class="">

            <nav id="header" class="fixed bg-gray-100 text-green-800 w-full z-20 top-0">
                <div id="progress" class="h-1 z-40 top-0" style="background:linear-gradient(to right, #FFC100 var(--scroll), );"></div>
                <div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-right justify-between mt-0 py-3">
                    <!-- Header Logo Start -->
                    <div class="col">
                        <div class="header-logo">
                            <a href="{{route('home')}}">
                                <img src="{{asset('images/logo.png')}}" class="h-16"></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->
                    <div class="block lg:hidden pr-4">
                        <button id="nav-toggle" class="flex items-center px-3 py-2 text-gray-600 border-gray-600 focus:outline-none">
                            <svg fill="text-gray-600" viewBox="0 0 20 20" class="w-6 h-6 fill-current">
                                <title>Menu</title>
                                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="w-full flex-grow p-4 lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-transparent md:bg-transparent z-20" id="nav-content">
                        <ul class="list-reset lg:flex justify-end flex-1 items-center">

                            <li class="mr-3">
                                <a class="border-b-0 md:border-b-4 border-green-500 inline-block py-2 px-4 text-green-500 font-bold" href="{{route('home')}}">Inicio</a>
                            </li>
                            <li class="mr-3">
                                <a class="inline-block hover:text-green-500 hover:text-underline py-2 px-4" href="#">Contacto</a>
                            </li>
                            @auth
                            <li class="mr-3">
                                <a class="inline-block hover:text-green-500 hover:text-underline py-2 px-4" href="{{url('dashboard')}}">Dashboard</a>
                            </li>
                            @else
                            <li class="mr-3">
                                <a class="inline-block hover:text-green-500 hover:text-underline py-2 px-4" href="{{url('login')}}">Login</a>
                            </li>
                            <li class="mr-3">
                                <a class="inline-block hover:text-green-500 hover:text-underline py-2 px-4" href="{{url('register')}}">Registro</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>


        <main>
            <div>
                @yield('content')
            </div>
        </main>


        <footer class="w-full h-64 flex   items-center justify-center bg-gray-800">
            <!-- footer Logo Start -->
            <div class="col">
                <div class="header-logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset('images/logo.png')}}" class="h-16"></a>
                </div>
            </div>
            <!-- footer Logo End -->
            <div class="md:w-2/3 w-full px-4 text-white flex flex-col">

                <div class="w-full text-4xl font-bold">
                    <h1 class="w-full md:w-2/3">Worktech</h1>
                </div>
                <div class="flex mt-8 flex-col md:flex-row md:justify-between">
                    <p class="w-full md:w-2/3 text-gray-400">Encuentra las mejores opciones de empleo en nuestra plataforma, crece profesionalmente y no pares de aprender!</p>
                    <div class="w-44 pt-6 md:pt-0">
                        <a class="bg-yellow-500 hover:bg-yellow-400 justify-center text-center rounded-lg shadow px-10 py-3 flex items-center">Contáctanos</a>
                    </div>
                </div>
            </div>

        </footer>
        <footer class="bg-gray-700">
            <div class="max-w-6xl m-auto text-gray-800 flex flex-wrap justify-center">
                <!-- Col-1 -->
                <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
                    <!-- Col Title -->
                    <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                        Sobre Nosotros
                    </div>

                    <!-- Links -->

                    <a href="http://tradydaddy.com/" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Installation
                    </a>
                    <a href="http://tradydaddy.com/" target="_blank" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                        Release Notes
                    </a>
                </div>

                <!-- Col-2 -->
                <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
                    <!-- Col Title -->
                    <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                        Contáctanos
                    </div>

                    <!-- Links -->
                    <div class="text-xs font-medium mb-6 text-gray-300">
                        <div class="my-3 block"><a href="http://tradydaddy.com/" target="_blank" class="w-6 mx-1 ">
                                <i class="fa fa-phone mr-1 "></i> 5-555555
                            </a>
                        </div>
                        <div class="my-3 block"><a href="http://tradydaddy.com/" target="_blank" class="w-6 mx-1">
                            <i class="fa fa-envelope mr-1"></i> Soporte@worktech.com
                        </a>
                        </div>
                    </div>
                </div>

                <!-- Col-3 -->
                <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">
                    <!-- Col Title -->
                    <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                        Síguenos
                    </div>

                    <!-- Links -->
                    <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex text-gray-300">
                        <a href="http://tradydaddy.com/" target="_blank" class="w-6 mx-1">
                            <i class="fa fa-github"></i>
                        </a>
                        <a href="http://tradydaddy.com/" target="_blank" class="w-6 mx-1">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="http://tradydaddy.com/" target="_blank" class="w-6 mx-1">
                            <i class="fa fa-youtube"></i>
                        </a>
                        <a href="http://tradydaddy.com/" target="_blank" class="w-6 mx-1">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="http://tradydaddy.com/" target="_blank" class="w-6 mx-1">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="http://tradydaddy.com/" target="_blank" class="w-6 mx-1">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Copyright Bar -->
            <div class="pt-2">
                <div class="md:flex-auto flex pb-5 px-3 m-auto pt-5 border-t border-gray-500 text-gray-400 text-sm 
                flex-col md:flex-row max-w-6xl">
                    <div class="mt-2">
                        © 2021 | WorkTech - Todos los derechos reservados
                    </div>

                    <!-- Required Unicons (if you want) -->

                </div>
            </div>
        </footer>
        <script>
            var h = document.documentElement,
                b = document.body,
                st = 'scrollTop',
                sh = 'scrollHeight',
                progress = document.querySelector('#progress'),
                scroll;
            var scrollpos = window.scrollY;
            var header = document.getElementById("header");
            var navcontent = document.getElementById("nav-content");

            document.addEventListener('scroll', function() {
                scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
                progress.style.setProperty('--scroll', scroll + '%');
                scrollpos = window.scrollY;

                if (scrollpos > 10) {
                    header.classList.add("bg-gray-100");
                    navcontent.classList.remove("bg-gray-100");
                    navcontent.classList.add("bg-gray-100");
                } else {
                    header.classList.remove("bg-gray-100");
                    navcontent.classList.remove("bg-gray-100");
                    navcontent.classList.add("bg-gray-100");

                }

            });

            document.getElementById('nav-toggle').onclick = function() {
                document.getElementById("nav-content").classList.toggle("hidden");
            }
        </script>


</body>

</html>