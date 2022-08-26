<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


          <span class="p-2 text-pink-800 font-bold">Lista de Productos</span>

            <x-table >
                <div class="py-2 px-2 flex justify-between">
                    <!-- <input type="search" wire:model="search" placeholder="Buscar sección..."> -->
                    <x-jet-input type="search" wire:model="search" class="flex-1 mr-4"/>
                    @livewire('front.producto.crear-producto')
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
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">
                        sección
                        <i class="fas fa-sort float-right"></i>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">
                        categoría
                        <i class="fas fa-sort float-right"></i>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer" wire:click="order('name')">
                        Código
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
                        descripcion
                        <i class="fas fa-sort float-right"></i>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">
                        banda
                        <i class="fas fa-sort float-right"></i>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">precio
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">acciones</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($productos as $producto)
                    <tr class=" hover:bg-gray-100 hover:text-pink-800 hover:font-semibold hover:text-2xl">
                      <td class="px-6 py-1 whitespace-nowrap text-sm font-semibold">{{$producto->id}}</td>
                      <td class="px-6 py-1 whitespace-nowrap text-sm font-semibold">
                        @foreach($producto->secciones as $seccion)
                            {{ ucwords($seccion->name) }}
                        @endforeach
                      </td>
                      <td class="px-6 py-1 whitespace-nowrap text-sm font-semibold">
                        @foreach($producto->categorias as $categoria)
                            {{ ucwords($categoria->category_name) }}
                        @endforeach
                      </td>
                      <td class="px-6 py-1 whitespace-nowrap text-sm font-semibold">{{$producto->codigo}}</td>
                      <td class="px-6 py-1 whitespace-nowrap text-sm font-semibold">{{$producto->descripcion}}</td>
                      <td class="px-6 py-1 whitespace-nowrap text-sm font-semibold">{{$producto->banda}}</td>
                      <td class="px-6 py-1 whitespace-nowrap text-sm font-semibold">{{$producto->precio}}</td>                         
                      <td class="px-6 py-1 whitespace-nowrap text-sm font-semibold">
                        @livewire('front.producto.editar-producto',['producto' => $producto], key($producto->id))
                      </td>
                    </tr>
                    @empty
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap"><span class="text-sm text-gray-600">[Error:01] | </span> No hay registros en productos...</td>
                        </tr>
                        
                    @endforelse

                    <tr>
                        <td colspan="9" class="text-right px-2 py-4">{{ $productos->links() }}</td>                              
                    </tr>
                   
                  </tbody>
                </table>


            </x-table >

           
        </div>
    </div>
</div>



