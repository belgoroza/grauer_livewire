    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @if(session()->has('ok'))
                    <div class="p-3 bg-green-600 text-white font-semibold">
                        {{ session('ok')}}
                    </div>
                @else
                    <div class="p-3 bg-red-600 text-white font-semibold">
                        {{ session('failed')}}
                    </div>
                @endif

                <div class="flex flex-row gap-2 px-4 pb-2 border-b bg-gray-800 text-white text-sm font-semibold"> 

                    <div class="flex flex-col">
                        <label>Fecha</label>
                        <input type="date" class="h-6 border border-blue-300 rounded text-black" wire:model="fecha">
                        <x-jet-input-error for="fecha" />
                    </div>                           
                    <div class="flex flex-col">
                        <label>Documento Tipo</label>
                        <select class="px-2 py-0 h-6 border border-blue-300 rounded text-blue-800 font-semibold" wire:model="documento">
                            <option value="">...</option>
                            <option value="FACTURA">FACTURA</option>
                            <option value="GUIA DE REMISION">GUIA DE REMISION</option>
                            <option value="TRANSFERENCIA">TRANSFERENCIA</option>
                        </select>
                        <x-jet-input-error for="documento" />
                    </div>

                    <div class="flex flex-col">
                        <label>Documento Numero</label>
                        <input class="px-2 h-6 border border-blue-300 rounded text-blue-800 font-semibold" wire:model="numero">
                        <x-jet-input-error for="numero" />
                    </div>

                    

                    <div class="flex flex-col">
                        <label>Cliente</label>
                        <input class="px-2 h-6 border border-blue-300 rounded text-blue-800 font-semibold" wire:model="responsable">
                        <x-jet-input-error for="responsable" />
                    </div>

                    <div class="flex flex-col">
                        <label>Responsable</label>
                        <input class="px-2 h-6 border border-blue-300 rounded text-blue-800 font-semibold" wire:model="destino">
                        <x-jet-input-error for="destino" />
                    </div>

                    <div class="flex flex-col">
                        <label>Buscar Blanca</label>
                        <input type="search" wire:model="buscarBlanca" class="px-2 py-0 h-6 border border-blue-300 rounded text-blue-800 font-semibold">
                    </div>
                    
                </div>






                @if($vista==true)

                    <x-table >
                        

                        

                        
                        <table class="min-w-full divide-y divide-gray-200 text-sm">
                          <thead class="bg-gray-50">
                            <tr>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" wire:click="order('id')">
                                id
                                @if($sort == 'id')
                                    @if($direction == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt float-right"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-down-alt float-right"></i>
                                    @endif
                                @else
                                    <i class="fas fa-sort float-right"></i>

                                @endif
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" wire:click="order('name')">
                                oficina
                                @if($sort == 'name')
                                    @if($direction == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt float-right"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-down-alt float-right"></i>
                                    @endif
                                @else
                                    <i class="fas fa-sort float-right"></i>

                                @endif


                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">
                                Ubicación
                                <i class="fas fa-sort float-right"></i>
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Master</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Item</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Medida</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Marca</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Estado</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Código</th>
                              
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Acciones</th>
                            </tr>
                          </thead>

                          <tbody class="bg-yellow-50 divide-y divide-gray-200">
                            @forelse($resultados as $blanca)
                            <tr class="border border-b border-gray-200 text-xs font-semibold hover:bg-gray-100  hover:text-xl py-0 my-0 cursor-pointer">
                              <td class="px-6 py-2 whitespace-nowrap text-xs font-semibold">{{$blanca->oficina}}</td>
                                @foreach($blanca->productos as $producto)
                                    <td class="px-6 py-2 whitespace-nowrap text-xs font-semibold">{{ $producto->codigo }}</td>
                                    <td class="px-6 py-2 whitespace-nowrap text-xs font-semibold">{{ $producto->descripcion }}</td>
                                @endforeach
                              
                              
                              <td class="px-6 py-2 whitespace-nowrap text-xs font-semibold">{{$blanca->marca}}</td>
                              <td class="px-6 py-2 whitespace-nowrap text-xs font-semibold">{{$blanca->serie}}</td>
                              <td class="px-6 py-2 whitespace-nowrap text-xs font-semibold">{{$blanca->ubicacion}}</td>
                              <td class="px-6 py-2 whitespace-nowrap text-xs font-semibold">{{$blanca->ingreso_fecha}}</td>
                              <td class="px-6 py-2 whitespace-nowrap text-xs font-semibold">{{$blanca->ingreso_origen}}</td>                                                     
                              <td>
                                <a wire:click="egresoBlanca({{ $blanca->id }})" class="font-bold text-black p-2 rounded cursor-pointer bg-green-300 hover:text-white hover:bg-green-600 " >Entregar</a>
                              </td>
                            </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="px-6 py-2 whitespace-nowrap"><span class="text-sm text-gray-600">  No hay registros en blancas...</span></td>
                                </tr>
                                
                                @endforelse

                            <tr>
                              <td colspan="10" class="text-right px-2 py-4">{{ $resultados->links() }}</td>                              
                            </tr>
                           
                          </tbody>
                        </table>


                    </x-table >

                @else   

                    @livewire('front.servicio.crear-servicio')

                    

                @endif
            </div>
        </div>
    </div>
