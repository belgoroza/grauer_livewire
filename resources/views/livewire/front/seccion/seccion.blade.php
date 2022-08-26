    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


            	<span class="p-2 text-pink-800 font-bold">Listado de Secciones</span>

            	<x-table >
					<div class="py-2 px-2 flex justify-between">
						<!-- <input type="search" wire:model="search" placeholder="Buscar sección..."> -->
						<x-jet-input type="search" wire:model="search" class="flex-1 mr-4"/>
						@livewire('front.seccion.crear-seccion')
					</div>


					<table class="min-w-full divide-y divide-gray-200">
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
			            @forelse($secciones as $seccion)
			            <tr>
			              <td class="px-6 py-1 whitespace-nowrap">{{$seccion->id}}</td>
			              <td class="px-6 py-1 whitespace-nowrap">{{$seccion->name}}</td>
			              <td class="px-6 py-1 whitespace-nowrap">Activo</td>			              
			              <td class="px-6 py-1 whitespace-nowrap ">
			                @livewire('front.seccion.editar-seccion',['seccion' => $seccion], key($seccion->id))
			              </td>
			            </tr>
			            @empty
			            	<tr>
			            		<td class="px-6 py-4 whitespace-nowrap"><span class="text-sm text-gray-600">[Error:01] | </span> No hay registros en Secciones...</td>
			            	</tr>
			            	
			            @endforelse
			           
			          </tbody>
			        </table>


				</x-table >
            </div>
        </div>
    </div>



