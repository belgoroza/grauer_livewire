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



        <style>
          /* This example part of kwd-dashboard see https://kamona-wd.github.io/kwd-dashboard/ */
          /* So here we will write some classes to simulate dark mode and some of tailwind css config in our project */
            :root 
            {
              --light: #edf2f9;
              --dark: #152e4d;
              --darker: #12263f;
            }

            .dark .dark\:text-light 
            {
              color: var(--light);
            }

            .dark .dark\:bg-dark 
            {
              background-color: var(--dark);
            }

            .dark .dark\:bg-darker 
            {
              background-color: var(--darker);
            }

            .dark .dark\:text-gray-300 
            {
              color: #d1d5db;
            }

            .dark .dark\:text-indigo-500 
            {
              color: #6366f1;
            }

            .dark .dark\:text-indigo-100 
            {
              color: #e0e7ff;
            }

            .dark .dark\:hover\:text-light:hover 
            {
                color: var(--light);
            }

            .dark .dark\:border-indigo-800 
            {
              border-color: #3730a3;
            }

            .dark .dark\:border-indigo-700 
            {
              border-color: #4338ca;
            }

            .dark .dark\:bg-indigo-600 
            {
              background-color: #4f46e5;
            }

            .dark .dark\:hover\:bg-indigo-600:hover 
            {
              background-color: #4f46e5;
            }

            .dark .dark\:border-indigo-500 
            {
              border-color: #6366f1;
            }

            .hover\:overflow-y-auto:hover 
            {
              overflow-y: auto;
            }
        </style>
        <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.6.x/dist/component.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

    </head>
    
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        @livewireScripts
    </body>
</html>



    <!-- component -->
    

    


   

  <script>  
  

      const setup = () => 
      {
          const getTheme = () => 
          {
              if (window.localStorage.getItem('dark')) 
              {
                return JSON.parse(window.localStorage.getItem('dark'))
              }
              return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
          }

          const setTheme = (value) => 
          {
              window.localStorage.setItem('dark', value)
          }

          return {
              // loading: true,
              isDark: getTheme(),
              toggleTheme() 
              {
                this.isDark = !this.isDark
                setTheme(this.isDark)
              },
              setLightTheme() 
              {
                this.isDark = false
                setTheme(this.isDark)
              },
              setDarkTheme() 
              {
                this.isDark = true
                setTheme(this.isDark)
              },
              
              watchScreen() 
              {
                if (window.innerWidth <= 1024) 
                {
                  this.isSidebarOpen = false
                  this.isSecondSidebarOpen = false
                } 
                else if (window.innerWidth >= 1024) 
                {
                  this.isSidebarOpen = true
                  this.isSecondSidebarOpen = true
                }
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
              isSettingsPanelOpen: false,
              openSettingsPanel() 
              {
                this.isSettingsPanelOpen = true
                this.$nextTick(() => 
                {
                  this.$refs.settingsPanel.focus()
                })
              },
              isSearchPanelOpen: false,
              openSearchPanel() 
              {
                this.isSearchPanelOpen = true
                this.$nextTick(() => 
                {
                  this.$refs.searchInput.focus()
                })
              },
          }
      }
  </script>
</div>