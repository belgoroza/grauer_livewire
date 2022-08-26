<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'FG') }}</title>

        <link rel="shortcut icon" href="{{ asset('storage/imagenes/logo/logo-fg-forma-2-32x32.png')}}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"/>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <!-- <body class="" style="background-image: url({{asset('modernizr/images/1.jpg')}});background-position: center center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;background-color: #66999;"> -->
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        @livewireScripts
    </body>

    <script>  
  

        function mostrar(e)
        {
            document.getElementById('obj2').style.display = 'block';
            console.log(e);
        }

        function ocultar()
        {
            document.getElementById('obj2').style.display = 'none';
        }

      const setup = () => 
      {          

          return {              
              
              // watchScreen() 
              // {
              //   if (window.innerWidth <= 1024) 
              //   {
              //     this.isSidebarOpen = false
              //     this.isSecondSidebarOpen = false
              //   } 
              //   else if (window.innerWidth >= 1024) 
              //   {
              //     this.isSidebarOpen = true
              //     this.isSecondSidebarOpen = true
              //   }
              // },

              isSecondSidebarOpen: window.innerWidth >= 1024 ? true : false,
              toggleSecondSidbarColumn() 
              {
                this.isSecondSidebarOpen = !this.isSecondSidebarOpen
              },

              isSidebarOpen: window.innerWidth >= 1024 ? true : false,
              toggleSidbarMenu() 
              {
                this.isSidebarOpen = !this.isSidebarOpen
              },
              isSecondSidebarOpen: window.innerWidth >= 1024 ? true : false,
              toggleSecondSidbarColumn() 
              {
                this.isSecondSidebarOpen = !this.isSecondSidebarOpen
              },
              


          }
      }
  </script>
</html>


