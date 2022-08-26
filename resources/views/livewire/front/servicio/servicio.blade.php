    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @if($vista==true)

                    <x-table >
                        <div class="py-2 px-2 flex justify-between">
                            <!-- <input type="search" wire:model="search" placeholder="Buscar sección..."> -->
                            <x-jet-input type="search" wire:model="search" class="flex-1 mr-4"/>
                            <x-jet-danger-button wire:click="$set('vista',false)">Crear Nuevo Servicio</x-jet-danger-button>
                        </div>


                        <table class="min-w-full divide-y divide-gray-200 text-sm">
                          <thead class="bg-gray-50">
                            <tr>
                              
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">oficina </th>
                              
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Cliente</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Asesor</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Master</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Item</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Medida</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Marca</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Estado</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Ubicación<i class="fas fa-sort float-right"></i>
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Acciones</th>
                            </tr>
                          </thead>

                          <tbody class="bg-yellow-50 divide-y divide-gray-200">
                            @forelse($servicios as $servicio)
                            <tr class="border border-b border-gray-200 text-xs font-semibold hover:bg-gray-100  hover:text-xl py-0 my-0 cursor-pointer">
                              <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{$servicio->oficina}}</td>
                              <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">
                                  @foreach($servicio->clientes as $cliente)
                                    {{ $cliente->nombre }}
                                @endforeach
                              </td>
                              <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">
                                  @foreach($servicio->asesores as $asesor)
                                    {{ $asesor->nombre }}
                                @endforeach
                              </td>
                              <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{$servicio->master}}-{{ $servicio->item}}</td>
                              <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{$servicio->item}}</td>
                              <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{$servicio->medida}}</td>
                              <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{$servicio->marca}}</td>
                              <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{$servicio->estado}}</td> 
                              <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{$servicio->ubicacion}}</td>                                                      
                              <td class="text-gray-800">
                                @livewire('front.servicio.editar',['servicio' => $servicio], key($servicio->id))
                              </td>
                            </tr>
                            @empty
                                <tr>
                                    <td class="px-6 py-1 whitespace-nowrap"><span class="text-sm text-gray-600">[Error:01] | </span> No hay registros en servicios...</td>
                                </tr>
                                
                            @endforelse

                            <tr>
                              <td colspan="9" class="text-right px-2 py-4">{{ $servicios->links() }}</td>                              
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


























