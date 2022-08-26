    <div class="py-12" x-data="{}" x-init="window.Livewire.rescan($el)">        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @if($vista==true)

                    <div class="py-2 px-2 flex justify-between">
                        <!-- <input type="search" wire:model="search" placeholder="Buscar sección..."> -->
                        <x-jet-input type="search" wire:model="search" class="flex-1 mr-4"/>
                        <x-jet-danger-button wire:click="$set('vista',false)">Crear Nueva Blanca</x-jet-danger-button>
                    </div>

                    <x-table >
                        


                        <table class="min-w-full divide-y divide-gray-200 text-sm">
                          <thead class="bg-gray-50">
                            <tr>
                              
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Oficina </th>                              
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Código </th>                              
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Medida</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Marca</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Serie</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Ubicacion</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Ingreso</th>
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Origen</th>
                              
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Acciones</th>
                            </tr>
                          </thead>

                          <tbody class="bg-yellow-50 divide-y divide-gray-200">
                            @forelse($resultados as $blanca)
                            <tr class="border border-b border-gray-200 text-xs font-semibold hover:bg-gray-100  hover:text-xl py-0 my-0 cursor-pointer">
                              <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{$blanca->oficina}}</td>
                                @foreach($blanca->productos as $producto)
                                    <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{ $producto->codigo }}</td>
                                    <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{ $producto->descripcion }}</td>
                                @endforeach
                              
                              
                              <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{$blanca->marca}}</td>
                              <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{$blanca->serie}}</td>
                              <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{$blanca->ubicacion}}</td>
                              <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{$blanca->ingreso_fecha}}</td>
                              <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{$blanca->ingreso_origen}}</td>                                                     
                              <td class="text-gray-800">
                                @livewire('front.blanca.editar-blanca',['blanca' => $blanca], key($blanca->id))
                              </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="px-6 py-1 whitespace-nowrap"><span class="text-sm text-gray-600">  No hay registros en blancas...</span></td>
                                </tr>
                                
                            @endforelse

                            <tr>
                              <td colspan="10" class="text-right px-2 py-4">{{ $resultados->links() }}</td>                              
                            </tr>
                           
                          </tbody>
                        </table>


                    </x-table >

                @else   

                    @livewire('front.blanca.crear-blanca')

                    

                @endif
            </div>
        </div>
    </div>


























