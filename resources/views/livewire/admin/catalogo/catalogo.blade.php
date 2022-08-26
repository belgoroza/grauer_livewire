


        

    <div
        x-data="setup()"      
        :class="{ 'dark': isDark }"
        @resize.window="watchScreen()"
        x-init="$refs.loading.classList.add('hidden');">

        <div x-ref="loading" class="h-full w-full m-auto inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-indigo-800">Cargando.....</div>

        <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
            
            <!-- Loading screen -->
         
        <!--********* SIDEBAR ==> COLUMNA NÚMERO 1 (INICIO) ***************-->
            <!-- Backdrop ==> isSidebarOpen -->
            <div
                x-show="isSidebarOpen"
                @click="isSidebarOpen = false"
                class="fixed inset-0 z-10 bg-indigo-800 lg:hidden"
                style="opacity: 0.5"
                aria-hidden="true">BACKDROP ==> columna numero 1
            </div>
            <!-- Main -->
            <aside
                x-show="isSidebarOpen"
                x-transition:enter="transition-all transform duration-300 ease-in-out"
                x-transition:enter-start="-translate-x-full opacity-0"
                x-transition:enter-end="translate-x-0 opacity-100"
                x-transition:leave="transition-all transform duration-300 ease-in-out"
                x-transition:leave-start="translate-x-0 opacity-100"
                x-transition:leave-end="-translate-x-full opacity-0"
                x-ref="sidebar"
                @keydown.escape="window.innerWidth <= 1024 ? isSidebarOpen = false : ''"
                tabindex="-1"
                class="fixed inset-y-0 z-10 flex-shrink-0 w-64 bg-white border-r lg:static dark:border-indigo-800 dark:bg-darker focus:outline-none" >
                  
                <div class="flex flex-col h-full"> 
                    <!-- sidebar-1-main -->
                    <nav aria-label="Main" class="flex-1 px-2 py-4 space-y-2 overflow-y-hidden hover:overflow-y-auto">
                        <!-- Dashboards links -->
                        <div x-data="{ isActive: false, open: false}"> <!-- Tablero -->
                            <!-- active & hover classes 'bg-indigo-100 dark:bg-indigo-600' -->
                            <a
                                href="#"
                                @click="$event.preventDefault(); open = !open"
                                class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-indigo-600"
                                :class="{'bg-indigo-100 dark:bg-indigo-600': isActive || open}"
                                role="button"
                                aria-haspopup="true"
                                :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                <span aria-hidden="true">
                                    <svg
                                        class="w-5 h-5"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm"> Tablero </span>
                                <span class="ml-auto" aria-hidden="true">
                                <!-- active class 'rotate-180' -->
                                    <svg
                                        class="w-4 h-4 transition-transform transform"
                                        :class="{ 'rotate-180': open }"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </a>
                            
                            <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                                <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                <a
                                    href="#"
                                    role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">Nuevo Master</a>
                                <a
                                    href="#"
                                    role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">Administrar Proyecto</a>
                                <a
                                    href="#"
                                    role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">E-Market</a>
                            </div>
                        </div>

                        <!-- Components links -->
                        <div x-data="{ isActive: false, open: false }"> <!-- Componentes -->
                            <!-- active classes 'bg-indigo-100 dark:bg-indigo-600' -->
                            <a
                                href="#"
                                @click="$event.preventDefault(); open = !open"
                                class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-indigo-600"
                                :class="{ 'bg-indigo-100 dark:bg-indigo-600': isActive || open }"
                                role="button"
                                aria-haspopup="true"
                                :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                <span aria-hidden="true">
                                <svg
                                    class="w-5 h-5"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                                </svg>
                                </span>
                                <span class="ml-2 text-sm"> Componentes </span>
                                <span aria-hidden="true" class="ml-auto">
                                <!-- active class 'rotate-180' -->
                                <svg
                                    class="w-4 h-4 transition-transform transform"
                                    :class="{ 'rotate-180': open }"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                                </span>
                            </a>
                            <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Components">
                                <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                <a
                                href="#"
                                role="menuitem"
                                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700"
                                >
                                Alerts
                                </a>
                                <a
                                href="#"
                                role="menuitem"
                                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700"
                                >
                                Buttons
                                </a>
                                <a
                                href="#"
                                role="menuitem"
                                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                                >
                                Cards
                                </a>
                                <a
                                href="#"
                                role="menuitem"
                                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                                >
                                Dropdowns
                                </a>
                                <a
                                href="#"
                                role="menuitem"
                                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                                >
                                Forms
                                </a>
                                <a
                                href="#"
                                role="menuitem"
                                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                                >
                                Lists
                                </a>
                                <a
                                href="#"
                                role="menuitem"
                                class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                                >
                                Modals
                                </a>
                            </div>
                        </div>

                        <!-- Pages links -->
                        <div x-data="{ isActive: false, open: false }">
                        <!-- active classes 'bg-indigo-100 dark:bg-indigo-600' -->
                        <a
                            href="#"
                            @click="$event.preventDefault(); open = !open"
                            class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-indigo-600"
                            :class="{ 'bg-indigo-100 dark:bg-indigo-600': isActive || open }"
                            role="button"
                            aria-haspopup="true"
                            :aria-expanded="(open || isActive) ? 'true' : 'false'"
                        >
                            <span aria-hidden="true">
                            <svg
                                class="w-5 h-5"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"
                                />
                            </svg>
                            </span>
                            <span class="ml-2 text-sm"> Pages </span>
                            <span aria-hidden="true" class="ml-auto">
                            <!-- active class 'rotate-180' -->
                            <svg
                                class="w-4 h-4 transition-transform transform"
                                :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                            </span>
                        </a>
                        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Pages">
                            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                            <a
                            href="#"
                            role="menuitem"
                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700"
                            >
                            Blank
                            </a>
                            <a
                            href="#"
                            role="menuitem"
                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700"
                            >
                            Profile
                            </a>
                            <a
                            href="#"
                            role="menuitem"
                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                            >
                            Pricing
                            </a>
                            <a
                            href="#"
                            role="menuitem"
                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                            >
                            Kanban
                            </a>
                            <a
                            href="#"
                            role="menuitem"
                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                            >
                            Feed
                            </a>
                        </div>
                        </div>

                        <!-- Authentication links -->
                        <div x-data="{ isActive: false, open: false}">
                        <!-- active & hover classes 'bg-indigo-100 dark:bg-indigo-600' -->
                        <a
                            href="#"
                            @click="$event.preventDefault(); open = !open"
                            class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-indigo-600"
                            :class="{'bg-indigo-100 dark:bg-indigo-600': isActive || open}"
                            role="button"
                            aria-haspopup="true"
                            :aria-expanded="(open || isActive) ? 'true' : 'false'"
                        >
                            <span aria-hidden="true">
                            <svg
                                class="w-5 h-5"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                />
                            </svg>
                            </span>
                            <span class="ml-2 text-sm"> Authentication </span>
                            <span aria-hidden="true" class="ml-auto">
                            <!-- active class 'rotate-180' -->
                            <svg
                                class="w-4 h-4 transition-transform transform"
                                :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                            </span>
                        </a>
                        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication">
                            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                            <a
                            href="#"
                            role="menuitem"
                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                            >
                            Register
                            </a>
                            <a
                            href="#"
                            role="menuitem"
                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                            >
                            Login
                            </a>
                            <a
                            href="#"
                            role="menuitem"
                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                            >
                            Password Reset
                            </a>
                        </div>
                        </div>

                        <!-- Layouts links -->
                        <div x-data="{ isActive: true, open: true}">
                        <!-- active & hover classes 'bg-indigo-100 dark:bg-indigo-600' -->
                        <a
                            href="#"
                            @click="$event.preventDefault(); open = !open"
                            class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-indigo-600"
                            :class="{'bg-indigo-100 dark:bg-indigo-600': isActive || open}"
                            role="button"
                            aria-haspopup="true"
                            :aria-expanded="(open || isActive) ? 'true' : 'false'"
                        >
                            <span aria-hidden="true">
                            <svg
                                class="w-5 h-5"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                />
                            </svg>
                            </span>
                            <span class="ml-2 text-sm"> Layouts </span>
                            <span aria-hidden="true" class="ml-auto">
                            <!-- active class 'rotate-180' -->
                            <svg
                                class="w-4 h-4 transition-transform transform"
                                :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                            </span>
                        </a>
                        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication">
                            <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                            <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                            <a
                            href="#"
                            role="menuitem"
                            class="block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:text-light dark:hover:text-light hover:text-gray-700"
                            >
                            Two Columns Sidebar
                            </a>
                        </div>
                        </div>
                    </nav>

                    <!-- sidebar-1-footer -->
                    <div class="relative flex items-center justify-center flex-shrink-0 px-2 py-4 space-x-4 bg-pink-200">
                        <!-- botón buscar - img==> lupa -->
                        <button
                            @click="openSearchPanel"
                            class="p-2 text-indigo-400 transition-colors duration-200 rounded-full bg-indigo-50 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:text-light dark:hover:bg-indigo-700 dark:bg-dark focus:outline-none focus:bg-indigo-100 dark:focus:bg-indigo-700 focus:ring-indigo-800">
                            <span class="sr-only">Open search panel</span>
                            <svg
                                class="w-7 h-7"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </button>

                        <!-- botón menu usuario - img==> avatar -->
                        <div x-data="{ open: false }">
                            <button
                                @click="open = !open; $nextTick(() => { if(open){ $refs.userMenu.focus() } })"
                                type="button"
                                aria-haspopup="true"
                                :aria-expanded="open ? 'true' : 'false'"
                                class="block transition-opacity duration-200 rounded-full dark:opacity-75 dark:hover:opacity-100 focus:outline-none focus:ring dark:focus:opacity-100">
                                <span class="sr-only">User menu</span>
                                <img
                                class="w-12 h-12 rounded-full"
                                src="https://avatars.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
                                alt="Ahmed Kamel"
                                />
                            </button>

                            <!-- User dropdown menu -->
                            <div
                                x-show="open"
                                x-ref="userMenu"
                                x-transition:enter="transition-all transform ease-out"
                                x-transition:enter-start="-translate-y-1/2 opacity-0"
                                x-transition:enter-end="translate-y-0 opacity-100"
                                x-transition:leave="transition-all transform ease-in"
                                x-transition:leave-start="translate-y-0 opacity-100"
                                x-transition:leave-end="-translate-y-1/2 opacity-0"
                                @click.away="open = false"
                                @keydown.escape="open = false"
                                class="absolute max-w-xs py-1 bg-white rounded-md shadow-lg min-w-max left-5 right-5 bottom-full ring-1 ring-black ring-opacity-5 dark:bg-dark focus:outline-none"
                                tabindex="-1"
                                role="menu"
                                aria-orientation="vertical"
                                aria-label="User menu">
                                
                                <a
                                    href="#"
                                    role="menuitem"
                                    class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-indigo-600">Perfil</a>
                                
                                <a
                                    href="#"
                                    role="menuitem"
                                    class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-indigo-600">Configuraciones</a>
                                
                                <a
                                    href="#"
                                    role="menuitem"
                                    class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-indigo-600">Salir</a>
                            </div>
                        </div>

                        <!-- botón configuraciones - img==> settings -->
                        <button
                            @click="openSettingsPanel"
                            class="p-2 text-indigo-400 transition-colors duration-200 rounded-full bg-indigo-50 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:text-light dark:hover:bg-indigo-700 dark:bg-dark focus:outline-none focus:bg-indigo-100 dark:focus:bg-indigo-700 focus:ring-indigo-800">
                            <span class="sr-only">Abrir Panel de Configuración</span>
                            <svg
                                class="w-7 h-7"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </aside>
        <!--********* SIDEBAR ==> COLUMNA NÚMERO 1 (FIN) ******************-->

        <!--********* SIDEBAR ==> COLUMNA NÚMERO 2 (INICIO) ***************-->
            <!-- Backdrop ==> isSecondSidebarOpen -->
            <div
                x-show="isSecondSidebarOpen"
                @click="isSecondSidebarOpen = false"
                class="fixed inset-0 z-10 bg-indigo-800 lg:hidden"
                style="opacity: 0.5"
                aria-hidden="true">
            </div>
            <!-- Main -->
            <section
              x-show="isSecondSidebarOpen"
              x-transition:enter="transition-all transform duration-300 ease-in-out"
              x-transition:enter-start="-translate-x-full opacity-0"
              x-transition:enter-end="translate-x-0 opacity-100"
              x-transition:leave="transition-all transform duration-300 ease-in-out"
              x-transition:leave-start="translate-x-0 opacity-100"
              x-transition:leave-end="-translate-x-full opacity-0"
              x-ref="secondSidebar"
              @keydown.escape="window.innerWidth <= 1024 ? isSecondSidebarOpen = false : ''"
              tabindex="-1"
              class="fixed inset-y-0 z-10 flex-shrink-0 w-64 bg-white border-r dark:border-indigo-800 dark:bg-darker lg:static focus:outline-none">

                <div class="flex flex-col h-screen">
                  <!-- Panel header -->
                    <div class="flex-shrink-0">  <!-- header fijo -->
                        <div class="px-4 py-2 border-b dark:border-indigo-800">
                            <input type="search" class="h-6 p-2 rounded" wire:model="search" placeholder="Buscar medida..."> {{ $search }}
                        </div>
                    </div>

                    <!-- Panel content -->
                    <div class="flex-1 overflow-y-hidden hover:overflow-y-auto">
                        <div class="">
                            <!-- Content -->
                            @forelse($resultados as $resultado)
                            <div class="flow-root border-b cursor-pointer" wire:click="activar({{ $resultado->id }},{{ $resultado->categoria_id}})">
                                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <li class="py-3 sm:py-4 hover:bg-gray-100">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                                <img class="w-8 h-8 rounded-full text-xs" src="{{ asset('storage/imagenes/bandas/'.$resultado->imagen) }}" alt="S/I">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm font-bold text-gray-900 truncate dark:text-white">
                                                    {{ $resultado->descripcion }}
                                                </p>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    {{ $resultado->codigo }}
                                                </p>
                                            </div>
                                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                $ {{ $resultado->precio }}
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            @empty
                            <div class="h-screen">No hay registros...</div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </section>
        <!--********* SIDEBAR ==> COLUMNA NÚMERO 2 (FIN) ******************-->
          
        <!--********* SIDEBAR ==> COLUMNA NÚMERO 3 (INICIO) ***************-->
            <!-- Main content -->
            <main class="flex-1">
              <div class="flex flex-col items-center justify-center flex-1 h-full min-h-screen p-4 overflow-x-hidden overflow-y-auto" >                
              
                @if($idProducto)
                  @forelse($resalt as $item)

                      <section>
                          <div class="px-4 py-2 mx-auto">
                            <div class="max-w-4xl mx-auto">
                              <div class="relative">
                                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                  <div class="w-full border-t border-black"></div>
                                </div>
                                <div class="relative flex justify-start">
                                  <span class="pr-3 text-lg font-medium text-neutral-600 bg-white"> Detalle del Producto </span>
                                </div>
                              </div>
                              <div class="space-y-8 lg:divide-y lg:divide-gray-100">

                                <div class="pt-0 sm:flex lg:items-end group">
                                  <div class="flex-shrink-0 sm:mb-0 sm:mr-4">
                                    <img class="w-full rounded-md lg:h-32 lg:w-32" src="{{ asset('storage/imagenes/bandas/'.$item->imagen) }}" alt="text">
                                  </div>
                                  
                                  <div class="grid grid-cols-2 w-full">                            
                                      <div class="">
                                          <span class="text-sm ">Descripción</span> <br> <span class="text-sm font-bold">{{ $item->descripcion }}</span>
                                      </div>
                                      <div class="">
                                          <span class="text-sm">Banda</span> <br> <span class="text-sm font-bold">{{ $item->banda }}</span>
                                      </div>
                                      <div class="">
                                          <span class="text-sm">Precio</span> <br> <span class="text-sm font-bold">$ {{ $item->precio }}</span>
                                      </div>
                                      <div class="">
                                          <span class="text-sm">Codigo</span> <br> <span class="text-sm font-bold">{{ $item->codigo }}</span>
                                      </div>
                                      <div class="col-span-2">
                                          <span class="text-sm">Aplicaciones</span> <span class="text-sm font-bold">{{ $item->aplicacion }}</span>
                                      </div>
                                  </div>

                                </div>
                              </div><div class="w-full my-2 border-t border-black"></div>

                              <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                                  @forelse($detalle as $itemD)
                                      @if($item->categoria_id == 2)
                                          <div class="bg-green-50 hover:bg-blue-50 border rounded p-2 text-xs font-bold">
                                              <span>{{ $itemD->medida}}</span><br>
                                              <span>{{ $itemD->marca}} {{ $itemD->serie}}</span><br>
                                              <span>{{ $itemD->ingreso_origen}} {{ $itemD->ingreso_fecha}}</span><br>
                                          </div>
                                      @else
                                          <div class="bg-green-50 hover:bg-blue-50 border rounded p-2 text-xs font-bold">
                                              <span>{{ $itemD->medida}}</span><br>
                                              <span>{{ $itemD->marca}} {{ $itemD->serie }}</span><br>
                                              <span>{{ $itemD->master}}.{{ $itemD->item}} {{ $itemD->ingreso_fecha}}</span><br>
                                              <span>{{ $itemD->ingreso_origen}} {{ $itemD->ingreso_fecha}}</span><br>
                                          </div>
                                      @endif                             
                                  @empty
                                      No hay resultados...
                                  @endforelse
                              </div>

                            </div>
                          </div>
                      </section>        

                  @empty
                      No hay que mostrar...
                  @endforelse
                @else
                    @livewire('admin.catalogo.catalogo-detalle', ['item' => $idProducto])
                @endif
              </div> 
            </main>
        <!--********* SIDEBAR ==> COLUMNA NÚMERO 3 (FIN) ******************-->            

        
        
        </div>


        <!--********* BOTONES (DISPOSITIVO MOBILES)  (inicio) ***************-->
        <div class="fixed flex items-center space-x-4 top-5 right-10 lg:hidden">
            <!-- Open SIDEBAR ==> COLUMNA NÚMERO 1 (inicio) --> 
            <button
                @click="isSidebarOpen = true; $nextTick(() => { $refs.sidebar.focus() })"
                class="p-1 text-indigo-400 transition-colors duration-200 rounded-md bg-indigo-50 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:text-light dark:hover:bg-indigo-700 dark:bg-dark focus:outline-none focus:ring">
                <span class="sr-only">Toggle main manu</span>
                <span aria-hidden="true">
                    <svg
                      x-show="!isSidebarOpen"
                      class="w-8 h-8"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg
                      x-show="isSidebarOpen"
                      class="w-8 h-8"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
            </button>

            <!-- Open SIDEBAR ==> COLUMNA NÚMERO 1 (inicio) -->
            <button
              @click="isSecondSidebarOpen = true; $nextTick(() => { $refs.secondSidebar.focus() })"
              class="p-1 text-indigo-400 transition-colors duration-200 rounded-md bg-indigo-50 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:text-light dark:hover:bg-indigo-700 dark:bg-dark focus:outline-none focus:ring">
                <span class="sr-only">Panel de Alternancia</span>
                <span aria-hidden="true">
                    <svg
                      class="w-8 h-8 transition-transform transform"
                      :class="{ 'rotate-180': isSecondSidebarOpen }"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                    </svg>
                </span>
            </button>

        </div>
        <!--********* BOTONES (DISPOSITIVO MOBILES)  (fin) ***************-->

    </div>

   


