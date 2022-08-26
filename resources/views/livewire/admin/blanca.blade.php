



<div id="root">
      
      <!-- **** CABECERA  (inicio) ***********************-->
        <nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between fixed w-full md:w-64 z-10 py-4 px-6">
          
          <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
            <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
              <i class="fas fa-bars"></i>
            </button>
            <a class="md:block text-center md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="/public">
              FAVINI GOROZY MD
            </a>

            <ul class="md:hidden items-center flex flex-wrap list-none">
              
              <li class="inline-block relative">
                
                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="notification-dropdown">
                  <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                    Acción
                  </a>
                  <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                    Another action
                  </a>
                  <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                    Something else here
                  </a>
                  <div class="h-0 my-2 border border-solid border-blueGray-100"></div>

                  <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                    Seprated link
                  </a>
                </div>
              </li>

              <!-- ***** MOBIL (INICIO) ***** -->
              <li class="inline-block relative">
                <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-responsive-dropdown')">
                  <div class="items-center flex">
                    <span class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full">
                      <img alt="..." class="w-full rounded-full align-middle border-none shadow-lg" src="{{ asset('storage/imagenes/radio-loading.svg') }}"/>
                    </span>
                  </div>
                </a>
                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="user-responsive-dropdown">
                  <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                    Acción
                  </a>
                  <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                    Otra Acción
                  </a>
                  <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                    Algo Aquí
                  </a>
                  <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                  <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                    Seprated link
                  </a>
                </div>              
              </li>
              <!-- ***** MOBIL (FIN) ***** -->
            </ul>
            
            <!--********************* MODAL MOBIL (inicio) ******************** -->
              <div class="h-screen md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
                
                <!-- MODAL MOBIL CABECERA (INICIO) -->
                <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
                  <div class="flex flex-wrap">                
                    <div class="w-6/12">
                      <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="/">
                        FAVINI GOROZY MB
                      </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                      <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="toggleNavbar('example-collapse-sidebar')">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                </div>
                
                <form class="mt-6 mb-4 md:hidden">
                  <div class="mb-3 pt-0">
                    <input type="text" placeholder="Buscar medidia..." class="border-0 px-3 py-2 h-12 border border-solid border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"/>
                  </div>
                </form>
                
              
                
                <!-- Navigation Modal-->

                <div class="grid grid-cols-3 md:grid-cols-2 gap-2 md:pt-4">

                  <div class="flex flex-col rounded items-center border shadow hover:bg-yellow-200 cursor-pointer">
                    <img src="{{ asset('storage/iconos/fg_iconos/mototaxi_50.png')  }}">
                    <span class="text-xs font-bold">Mototaxi</span>
                  </div>

                  <div class="flex flex-col rounded items-center border shadow hover:bg-yellow-200 cursor-pointer">
                    <img src="{{ asset('storage/iconos/fg_iconos/auto_50.png')  }}">
                    <span class="text-xs font-bold">Auto</span>
                  </div>

                  <div class="flex flex-col rounded items-center border shadow hover:bg-yellow-200 cursor-pointer">
                    <img src="{{ asset('storage/iconos/fg_iconos/camioneta_50.png')  }}">
                    <span class="text-xs font-bold">Camioneta</span>
                  </div>

                  <div class="flex flex-col rounded items-center border shadow hover:bg-yellow-200 cursor-pointer">
                    <img src="{{ asset('storage/iconos/fg_iconos/camion.png')  }}">
                    <span class="text-xs font-bold">Camión L.</span>
                  </div>

                  <div class="flex flex-col rounded items-center border shadow hover:bg-yellow-200 cursor-pointer">
                    <img src="{{ asset('storage/iconos/fg_iconos/camion_pesado_50.png')  }}">
                    <span class="text-xs font-bold">Camión P.</span>
                  </div>

                  <div class="flex flex-col rounded items-center border shadow hover:bg-yellow-200 cursor-pointer">
                    <img src="{{ asset('storage/iconos/fg_iconos/van_50.png')  }}">
                    <span class="text-xs font-bold">Van/Buseta</span>
                  </div>

                  <div class="flex flex-col rounded items-center border shadow hover:bg-yellow-200 cursor-pointer">
                    <img src="{{ asset('storage/iconos/fg_iconos/bus_50.png')  }}">
                    <span class="text-xs font-bold">Bus</span>
                  </div>

                  <div class="flex flex-col rounded items-center border shadow hover:bg-yellow-200 cursor-pointer">
                    <img src="{{ asset('storage/iconos/fg_iconos/carreta_50.png')  }}">
                    <span class="text-xs font-bold">Carreta</span>
                  </div>

                  <div class="flex flex-col rounded items-center border shadow hover:bg-yellow-200 cursor-pointer">
                    <img src="{{ asset('storage/iconos/fg_iconos/volqueta_50.png')  }}">
                    <span class="text-xs font-bold">Volqueta</span>
                  </div>

                  <div class="flex flex-col rounded items-center border shadow hover:bg-yellow-200 cursor-pointer">
                    <img src="{{ asset('storage/iconos/fg_iconos/remolque_50.png')  }}">
                    <span class="text-xs font-bold">Remolque</span>
                  </div>

                  <div class="flex flex-col rounded items-center border shadow hover:bg-yellow-200 cursor-pointer">
                    <img src="{{ asset('storage/iconos/fg_iconos/montacarga_50.png')  }}">
                    <span class="text-xs font-bold">Montacargas</span>
                  </div>

                  <div class="flex flex-col rounded items-center border shadow hover:bg-yellow-200 cursor-pointer">
                    <img src="{{ asset('storage/iconos/fg_iconos/tractor_50.png')  }}">
                    <span class="text-xs font-bold">Tractor</span>
                  </div>

                </div>




               
                <!-- Navigation Modal-->

              </div>
            <!--********************* MODAL MOBIL (fin) ******************** -->


          </div>
        </nav>
      <!-- **** CABECERA  (fin) ***********************-->

      <div class="relative md:ml-64 bg-yellow-500 mx-auto">
        
        <nav class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
          <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
            <a class="text-pink-500 text-sm uppercase hidden lg:inline-block font-semibold" href="./index.html">Dashboard</a>
            <form class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3">
              <div class="relative flex w-full flex-wrap items-stretch">
                <span class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"><i class="fas fa-search"></i></span>
                <input type="text" placeholder="Buscar Aquí MD..." class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:ring w-full pl-10"/>
              </div>
            </form>
            <ul
              class="flex-col md:flex-row list-none items-center hidden md:flex"
            >
              <a
                class="text-blueGray-500 block"
                href="#pablo"
                onclick="openDropdown(event,'user-dropdown')"
              >
                <div class="items-center flex">
                  <span
                    class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"
                    ><img
                      alt="..."
                      class="w-full rounded-full align-middle border-none shadow-lg"
                      src="{{ asset('storage/iconos/fg_iconos/rueda_50.png') }}"
                  /></span>
                </div>
              </a>
              <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"id="user-dropdown">
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                Acción</a>
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                  Otra Acción
                </a>
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
                  Algo Aquí
                </a>
                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                <a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Seprated link</a
                >
              </div>
            </ul>
          </div>
        </nav>
        
        <!-- MAIN ****************************************-->
        <div class="relative bg-white md:pt-12 pb-32 pt-20 container mx-auto">

          <div class="flex w-full p-4 border-b border-gray-300 cursor-pointer hover:bg-green-200">
            <span class="flex-shrink-0 w-16 h-16 bg-gray-400 rounded-full"></span>
            <div class="flex flex-col flex-grow ml-4">
              <div class="flex"><span class="font-semibold">295/80 R22.5 HSU1</span></div>
              <p class="mt-1 text-sm font-bold text-blue-800">Largos recorridos </p>
            </div>
          </div>

          <div class="flex w-full p-4 border-b border-gray-300 cursor-pointer hover:bg-green-200">
            <span class="flex-shrink-0 w-16 h-16 bg-gray-400 rounded-full"></span>
            <div class="flex flex-col flex-grow ml-4">
              <div class="flex"><span class="font-semibold">295/80 R22.5 HSU1 PREMIUM</span></div>
              <p class="mt-1 text-sm font-bold text-blue-800">Fuera de Carretera</p>
            </div>
          </div>

          <div class="flex w-full p-4 border-b border-gray-300 cursor-pointer hover:bg-green-200">
            <span class="flex-shrink-0 w-16 h-16 bg-gray-400 rounded-full"></span>
            <div class="flex flex-col flex-grow ml-4">
              <div class="flex"><span class="font-semibold">295/80 R22.5 HDR2</span></div>
              <p class="mt-1 text-sm font-bold text-blue-800">Regional</p>
            </div>
          </div>

          <div class="flex w-full p-4 border-b border-gray-300 cursor-pointer hover:bg-green-200">
            <span class="flex-shrink-0 w-16 h-16 bg-gray-400 rounded-full"></span>
            <div class="flex flex-col flex-grow ml-4">
              <div class="flex"><span class="font-semibold">295/80 R22.5 HSU1</span></div>
              <p class="mt-1 text-sm font-bold text-blue-800">Una reseña para..... </p>
            </div>
          </div>

          <div class="flex w-full p-4 border-b border-gray-300 cursor-pointer hover:bg-green-200">
            <span class="flex-shrink-0 w-16 h-16 bg-gray-400 rounded-full"></span>
            <div class="flex flex-col flex-grow ml-4">
              <div class="flex"><span class="font-semibold">295/80 R22.5 HSU1</span></div>
              <p class="mt-1 text-sm font-bold text-blue-800">Una reseña para..... </p>
            </div>
          </div>

          <div class="flex w-full p-4 border-b border-gray-300 cursor-pointer hover:bg-green-200">
            <span class="flex-shrink-0 w-16 h-16 bg-gray-400 rounded-full"></span>
            <div class="flex flex-col flex-grow ml-4">
              <div class="flex"><span class="font-semibold">295/80 R22.5 HSU1</span></div>
              <p class="mt-1 text-sm font-bold text-blue-800">Una reseña para..... </p>
            </div>
          </div>

          <div class="flex w-full p-4 border-b border-gray-300 cursor-pointer hover:bg-green-200">
            <span class="flex-shrink-0 w-16 h-16 bg-gray-400 rounded-full"></span>
            <div class="flex flex-col flex-grow ml-4">
              <div class="flex"><span class="font-semibold">295/80 R22.5 HSU1</span></div>
              <p class="mt-1 text-sm font-bold text-blue-800">Una reseña para..... </p>
            </div>
          </div>

          <div class="flex w-full p-4 border-b border-gray-300 cursor-pointer hover:bg-green-200">
            <span class="flex-shrink-0 w-16 h-16 bg-gray-400 rounded-full"></span>
            <div class="flex flex-col flex-grow ml-4">
              <div class="flex"><span class="font-semibold">295/80 R22.5 HSU1</span></div>
              <p class="mt-1 text-sm font-bold text-blue-800">Una reseña para..... </p>
            </div>
          </div>

          <div class="flex w-full p-4 border-b border-gray-300 cursor-pointer hover:bg-green-200">
            <span class="flex-shrink-0 w-16 h-16 bg-gray-400 rounded-full"></span>
            <div class="flex flex-col flex-grow ml-4">
              <div class="flex"><span class="font-semibold">295/80 R22.5 HSU1</span></div>
              <p class="mt-1 text-sm font-bold text-blue-800">Una reseña para..... </p>
            </div>
          </div>

          <div class="flex w-full p-4 border-b border-gray-300 cursor-pointer hover:bg-green-200">
            <span class="flex-shrink-0 w-16 h-16 bg-gray-400 rounded-full"></span>
            <div class="flex flex-col flex-grow ml-4">
              <div class="flex"><span class="font-semibold">295/80 R22.5 HSU1</span></div>
              <p class="mt-1 text-sm font-bold text-blue-800">Una reseña para..... </p>
            </div>
          </div>

          <div class="flex w-full p-4 border-b border-gray-300 cursor-pointer hover:bg-green-200">
            <span class="flex-shrink-0 w-16 h-16 bg-gray-400 rounded-full"></span>
            <div class="flex flex-col flex-grow ml-4">
              <div class="flex"><span class="font-semibold">295/80 R22.5 HSU1</span></div>
              <p class="mt-1 text-sm font-bold text-blue-800">Una reseña para..... </p>
            </div>
          </div>

          












        </div>
        <!--  MAIN ************************************** -->
        

      </div>

    </div>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      charset="utf-8"
    ></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script type="text/javascript">
      /* Make dynamic date appear */
      (function () {
        if (document.getElementById("get-current-year")) {
          document.getElementById(
            "get-current-year"
          ).innerHTML = new Date().getFullYear();
        }
      })();
      /* Sidebar - Side navigation menu on mobile/responsive mode */
      function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("bg-white");
        document.getElementById(collapseID).classList.toggle("m-2");
        document.getElementById(collapseID).classList.toggle("py-3");
        document.getElementById(collapseID).classList.toggle("px-6");
      }
      /* Function for dropdowns */
      function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
          element = element.parentNode;
        }
        Popper.createPopper(element, document.getElementById(dropdownID), {
          placement: "bottom-start",
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
      }

      (function () {
        /* Chart initialisations */
        /* Line Chart */
        var config = {
          type: "line",
          data: {
            labels: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July",
            ],
            datasets: [
              {
                label: new Date().getFullYear(),
                backgroundColor: "#4c51bf",
                borderColor: "#4c51bf",
                data: [65, 78, 66, 44, 56, 67, 75],
                fill: false,
              },
              {
                label: new Date().getFullYear() - 1,
                fill: false,
                backgroundColor: "#fff",
                borderColor: "#fff",
                data: [40, 68, 86, 74, 56, 60, 87],
              },
            ],
          },
          options: {
            maintainAspectRatio: false,
            responsive: true,
            title: {
              display: false,
              text: "Sales Charts",
              fontColor: "white",
            },
            legend: {
              labels: {
                fontColor: "white",
              },
              align: "end",
              position: "bottom",
            },
            tooltips: {
              mode: "index",
              intersect: false,
            },
            hover: {
              mode: "nearest",
              intersect: true,
            },
            scales: {
              xAxes: [
                {
                  ticks: {
                    fontColor: "rgba(255,255,255,.7)",
                  },
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Month",
                    fontColor: "white",
                  },
                  gridLines: {
                    display: false,
                    borderDash: [2],
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.3)",
                    zeroLineColor: "rgba(0, 0, 0, 0)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2],
                  },
                },
              ],
              yAxes: [
                {
                  ticks: {
                    fontColor: "rgba(255,255,255,.7)",
                  },
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Value",
                    fontColor: "white",
                  },
                  gridLines: {
                    borderDash: [3],
                    borderDashOffset: [3],
                    drawBorder: false,
                    color: "rgba(255, 255, 255, 0.15)",
                    zeroLineColor: "rgba(33, 37, 41, 0)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2],
                  },
                },
              ],
            },
          },
        };
        var ctx = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(ctx, config);

        /* Bar Chart */
        config = {
          type: "bar",
          data: {
            labels: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July",
            ],
            datasets: [
              {
                label: new Date().getFullYear(),
                backgroundColor: "#ed64a6",
                borderColor: "#ed64a6",
                data: [30, 78, 56, 34, 100, 45, 13],
                fill: false,
                barThickness: 8,
              },
              {
                label: new Date().getFullYear() - 1,
                fill: false,
                backgroundColor: "#4c51bf",
                borderColor: "#4c51bf",
                data: [27, 68, 86, 74, 10, 4, 87],
                barThickness: 8,
              },
            ],
          },
          options: {
            maintainAspectRatio: false,
            responsive: true,
            title: {
              display: false,
              text: "Orders Chart",
            },
            tooltips: {
              mode: "index",
              intersect: false,
            },
            hover: {
              mode: "nearest",
              intersect: true,
            },
            legend: {
              labels: {
                fontColor: "rgba(0,0,0,.4)",
              },
              align: "end",
              position: "bottom",
            },
            scales: {
              xAxes: [
                {
                  display: false,
                  scaleLabel: {
                    display: true,
                    labelString: "Month",
                  },
                  gridLines: {
                    borderDash: [2],
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.3)",
                    zeroLineColor: "rgba(33, 37, 41, 0.3)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2],
                  },
                },
              ],
              yAxes: [
                {
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Value",
                  },
                  gridLines: {
                    borderDash: [2],
                    drawBorder: false,
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.2)",
                    zeroLineColor: "rgba(33, 37, 41, 0.15)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2],
                  },
                },
              ],
            },
          },
        };
        ctx = document.getElementById("bar-chart").getContext("2d");
        window.myBar = new Chart(ctx, config);
      })();
    </script>
