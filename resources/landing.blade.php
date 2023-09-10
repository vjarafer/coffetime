<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      Coffe Time
    </title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <style>
      .gradient {
        background: linear-gradient(90deg, #985FDE 0%, #5966F5 100%);
      }
    </style>
  </head>
  <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
          <a class="toggleColour text-black no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
            COFFE TIME
          </a>
        </div>
        <div class="block lg:hidden pr-4">
          <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            @auth
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="{{ route('logout') }}">Cerrar Sesión</a>
            </li>
            @else
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="{{ route('login') }}">Iniciar Sesion</a>
            </li>
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="{{ route('register') }}">Registrarse</a>
            </li>
            @endif
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="{{ route('product') }}">Ir al menu</a>
            </li>
          </ul>
        </div>
      </div>
      <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
    <div class="pt-24">
      <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
          <p class="uppercase tracking-loose w-full">Hola!</p>

          <h1 class="my-4 text-5xl font-bold leading-tight">
            Coffe Time es una cafetería de especialidad ubicada en Lota.
          </h1>
          <p class="leading-normal text-2xl mb-8">
            Ofrecemos una amplia variedad de cafés, tés, pasteles y otros productos de panadería, todos preparados con ingredientes frescos y de alta calidad.
          </p>
        </div>
        <!--Right Col-->
        <div class="w-full md:w-3/5 py-6 text-center">
          <img class="w-full md:w-4/5 z-50" src="{{asset('img/main.jpg')}}" />
        </div>
      </div>
    </div>
    <section class="bg-white border-b py-8">
      <div class="container max-w-5xl mx-auto m-10">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        Misión
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-wrap">
          <div class="w-5/6 sm:w-1/2 p-6">
            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                CoffeTime es una cafetería de especialidad que se compromete a ofrecer a nuestros clientes una experiencia de café única y memorable.
            </h3>
            <p class="text-gray-600 mb-8">
                Nos esforzamos por ofrecer café de la más alta calidad, preparado con ingredientes frescos y de temporada. También nos comprometemos a proporcionar un servicio amable y atento, creando un ambiente acogedor y acogedor para nuestros clientes.
              <br />
              <br />
            </p>
          </div>
          <div class="w-full sm:w-1/2 p-6 mt-6"> 
            <img class="w-full md:w-4/5 z-50" src="{{asset('img/mision.jpg')}}" />
          </div>
        </div>
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            Visión
        </h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
          <div class="w-full sm:w-1/2 p-6 mt-6">
            <img class="w-full md:w-4/5 z-50" src="{{asset('img/vision.jpg')}}" />
          </div>
          <div class="w-full sm:w-1/2 p-6 mt-6">
            <div class="align-middle">
              <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                Ser la cafetería de especialidad preferida de nuestra comunidad.
              </h3>
              <p class="text-gray-600 mb-8">
                Reconocida por su excelencia, innovación y compromiso con la sostenibilidad.
              <br />
              <br />
            </p>
            </div>
          </div>
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            Valores
        </h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-wrap">
            <div class="w-5/6 sm:w-1/2 p-6">
              <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                  Calidad, Servicio y Ambiente.
              </h3>
              <p class="text-gray-600 mb-8">
                Nos comprometemos a ofrecer a nuestros clientes la mejor calidad de café posible. Utilizamos granos de café de origen único de todo el mundo, y nuestro equipo de baristas está altamente capacitado para preparar bebidas de café deliciosas y complejas.
                <br />
                <br />
              </p>
            </div>
            <div class="w-full sm:w-1/2 p-6 mt-6"> 
              <img class="w-full md:w-4/5 z-50" src="{{asset('img/valores.jpg')}}" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navaction = document.getElementById("navAction");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");
      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-white");
          navaction.classList.remove("bg-white");
          navaction.classList.add("gradient");
          navaction.classList.remove("text-gray-800");
          navaction.classList.add("text-white");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          navaction.classList.remove("gradient");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-100");
        }
      });
    </script>
    <script>
      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");
      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
    </script>
  </body>
</html>