    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @if($vista==true)

                    <x-table >
                        <div class="py-2 px-2 flex justify-between">
                            <x-jet-input type="date" wire:model="fecha" class="flex-1 mr-4"/>
                            <x-jet-input type="search" wire:model="search" class="flex-1 mr-4"/>
                        </div>

                        @if(session()->has('ok'))
                            <div class="p-3 bg-green-600 text-white font-semibold">
                                {{ session('ok')}}
                            </div>
                        @else
                            <div class="p-3 bg-red-600 text-white font-semibold">
                                {{ session('failed')}}
                            </div>
                        @endif

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
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Acciones</th>
                            </tr>
                          </thead>
                          <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($servicios as $servicio)
                            <tr>
                              <td class="px-6 py-4 whitespace-nowrap text-xs font-semibold">{{$servicio->id}}</td>
                              <td class="px-6 py-4 whitespace-nowrap text-xs font-semibold">{{$servicio->oficina}}</td>
                              <td class="px-6 py-4 whitespace-nowrap text-xs font-semibold"><a wire:click="envioPlanta({{ $servicio->id }})" class="cursor-pointer bg-green-200 text-black p-2 rounded hover:bg-green-600 hover:text-white" >{{$servicio->ubicacion}}</a></td>
                              <td class="px-6 py-4 whitespace-nowrap text-xs font-semibold">{{$servicio->master}}-{{ $servicio->item}}</td>
                              <td class="px-6 py-4 whitespace-nowrap text-xs font-semibold">{{$servicio->item}}</td>
                              <td class="px-6 py-4 whitespace-nowrap text-xs font-semibold">{{$servicio->medida}}</td>
                              <td class="px-6 py-4 whitespace-nowrap text-xs font-semibold">{{$servicio->marca}}</td>
                              <td class="px-6 py-4 whitespace-nowrap text-xs font-semibold">{{$servicio->estado}}</td>                                                       
                              <td class="">
                                <div class="flex flex-between gap-2"> 
                                  @livewire('front.servicio.editar',['servicio' => $servicio], key($servicio->id))
                                  
                                </div>
                              </td>
                            </tr>
                            @empty
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="text-sm text-gray-600">[Error:01] | </span> No hay registros en servicios...</td>
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


























