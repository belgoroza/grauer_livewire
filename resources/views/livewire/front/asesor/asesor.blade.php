    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @if($vista==true)

                    <x-table >
                        <div class="py-2 px-2 flex justify-between">
                            <!-- <input type="search" wire:model="search" placeholder="Buscar sección..."> -->
                            <x-jet-input type="search" wire:model="search" class="flex-1 mr-4"/>
                            <x-jet-danger-button wire:click="$set('vista',false)">
                                Crear Nuevo Asesor
                            </x-jet-danger-button>
                        </div>


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
                                nombre
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
                                estado
                                <i class="fas fa-sort float-right"></i>
                              </th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">acciones</th>
                            </tr>
                          </thead>
                          <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($asesores as $asesor)
                            <tr>
                              <td class="px-6 py-4 whitespace-nowrap text-xs font-semibold">{{$asesor->id}}</td>
                              <td class="px-6 py-4 whitespace-nowrap text-xs font-semibold">{{$asesor->nombre}}</td>
                              <td class="px-6 py-4 whitespace-nowrap text-xs font-semibold">Activo</td>                         
                              <td class="px-6 py-4 whitespace-nowrap text-xs font-semibold text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                              </td>
                            </tr>
                            @empty
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="text-sm text-gray-600">[Error:01] | </span> No hay registros en asesores...</td>
                                </tr>
                                
                            @endforelse
                           
                          </tbody>
                        </table>


                    </x-table >

                @else   

                    @livewire('front.asesor.crear-asesor')

                    

                @endif
            </div>
        </div>
    </div>



