<div>
    @if(session()->has('message'))
        <div class="p-3 bg-green-600 text-white font-semibold">
            {{ session('message')}}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-3">
        <div class="border border-gray-300 p-2 m-2 rounded bg-gray-100">
            <div class="flex flex-row"><!-- Master -->
                <label class="w-1/3 p-1 text-sm font-semibold  text-gray-800 text-gray-800">Master</label>
                <input type="number" wire:model="buscarMaster" class="w-2/3 h-6 text-xs font-semibold py-0 rounded" placeholder="Master...">
                <x-jet-input-error for="buscarMaster" />
            </div>
            <div class="flex flex-row"><!-- Asesor -->
                <label class="w-1/3 p-1 text-sm font-semibold  text-gray-800">Asesor</label>
                <select wire:model="asesorId" class="w-2/3 h-6 text-xs font-semibold py-0 rounded" >
                  <option value=""></option>
                    @if($asesores)
                        @foreach ($asesores as $asesor)
                          <option value="{{$asesor->id}}">{{ $asesor->nombre }}</option>
                        @endforeach
                    @else
                        no data
                    @endif
                </select>
                <x-jet-input-error for="asesorId" />
            </div>
            <div class="flex flex-row"><!-- Oficina -->
                <label class="w-1/3 p-1 text-sm font-semibold  text-gray-800">Oficina</label>
                <select name="ciudad" wire:model="oficina" class="w-2/3 h-6 text-xs font-semibold rounded py-0" >
                   <option value=""></option>
                   <option value="STO DGO">STO DGO</option>                        
                  <option value="PK7">PK7</option>                        
                  <option value="ESMERALDAS">ESMERALDAS</option>                        
                  <option value="QUEVEDO">QUEVEDO</option>                        
                  <option value="LAGO AGRIO">LAGO AGRIO</option>                       
                  <option value="LAGO AGRIO">LA CHONE</option>                       
                  <option value="LAGO AGRIO">LA PAZ</option>                       
                </select>
                <x-jet-input-error for="oficina" />
            </div>
            <div class="flex flex-row"><!-- Fecha Planta -->
                <label class="w-1/3 p-1 text-sm font-semibold  text-gray-800">Fecha Planta</label>
                <input type="date" wire:model="fechaPlanta" class="w-2/3 h-6 text-xs font-semibold py-0 rounded">
                <x-jet-input-error for="fechaPlanta" />
            </div>
            <div class="flex flex-row"><!-- Item -->
                <label class="w-1/3 p-1 text-sm font-semibold  text-gray-800">Item</label>
                <input type="number" wire:model="item" class="w-2/3 h-6 text-xs font-semibold py-0 rounded" placeholder="Item...">
                <x-jet-input-error for="Item" />
            </div>
            <div class="flex flex-row"><!-- Fecha Recepcion -->
                <label class="w-1/3 p-1 text-sm font-semibold  text-gray-800">Fecha Recepcion</label>
                <input type="date" wire:model="fechaRecepcion" class="w-2/3 h-6 text-xs font-semibold py-0 rounded">
                <x-jet-input-error for="fechaRecepcion" />
            </div>
            <div class="flex flex-row"><!-- Cliente -->
                <label class="w-1/3 p-1 text-sm font-semibold  text-gray-800">Cliente</label>
                <!-- <input type="number" wire:model="cliente" class="w-2/3 h-6 text-xs font-semibold py-0 rounded"> -->
                <div>
                    <div
                        x-data="{
                          open: @entangle('showDropdown'),
                          search: @entangle('search'),
                          selected: @entangle('selected'),
                          highlightedIndex: 0,
                          highlightPrevious() 
                          {
                            if (this.highlightedIndex > 0) {
                              this.highlightedIndex = this.highlightedIndex - 1;
                              this.scrollIntoView();
                            }
                          },
                          highlightNext() 
                          {
                            if (this.highlightedIndex < this.$refs.results.children.length - 1) {
                              this.highlightedIndex = this.highlightedIndex + 1;
                              this.scrollIntoView();
                            }
                          },
                          scrollIntoView() 
                          {
                            this.$refs.results.children[this.highlightedIndex].scrollIntoView({
                              block: 'nearest',
                              behavior: 'smooth'
                            });
                          },
                          updateSelected(id, nombre) 
                          {
                            this.selected = id;
                            this.search = nombre;
                            this.open = false;
                            this.highlightedIndex = 0;
                          },
                      }">

                        <div
                            x-on:value-selected="updateSelected($event.detail.id, $event.detail.nombre)">
                            <span>
                              <div class="flex flex-row">
                                <input
                                  wire:model.debounce.300ms="search"
                                  x-on:keydown.arrow-down.stop.prevent="highlightNext()"
                                  x-on:keydown.arrow-up.stop.prevent="highlightPrevious()"
                                  x-on:keydown.enter.stop.prevent="$dispatch('value-selected', {
                                    id: $refs.results.children[highlightedIndex].getAttribute('data-result-id'),
                                    nombre: $refs.results.children[highlightedIndex].getAttribute('data-result-nombre')
                                  })" class="w-full h-6 text-xs font-semibold px-2 rounded border border-blue-300">
                                  <span class="pl-4"> @livewire('front.cliente.crear-cliente')</span>
                                  <x-jet-input-error for="search" />
                              </div>
                            </span>

                            <div
                              x-show="open"
                              x-on:click.away="open = false">
                                <ul x-ref="results">
                                  @forelse($results as $index => $result)
                                    <li
                                      wire:key="{{ $index }}"
                                      x-on:click.stop="$dispatch('value-selected', 
                                      {
                                        id: {{ $result->id }},
                                        nombre: '{{ $result->nombre }}'
                                      })"
                                      :class="
                                      {
                                        'bg-green-200': {{ $index }} === highlightedIndex,
                                        'text-gray-800': {{ $index }} === highlightedIndex
                                      }"
                                      data-result-id="{{ $result->id }}"
                                      data-result-nombre="{{ $result->nombre }}" class="cursor-pointer">
                                        <span wire:click="clienteId({{ $result->id }})" class="text-xs font-semibold">{{ $result->nombre }} | {{ $result->ciudad }}</span>
                                    </li>
                                  @empty
                                    <li>No results found</li>
                                  @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-row"><!-- Medida -->
                <label class="w-1/3 p-1 text-sm font-semibold  text-gray-800">Medida</label>
                <input wire:model="medida" class="w-2/3 h-6 text-xs font-semibold py-0 px-2 rounded border border-gray-300" placeholder="Medida...">
                <x-jet-input-error for="medida" />
            </div>
            <div class="flex flex-row"><!-- Serie -->
                <label class="w-1/3 p-1 text-sm font-semibold  text-gray-800">Serie</label>
                <input type="number" wire:model="serie" class="w-2/3 h-6 text-xs font-semibold py-0 px-2 rounded border border-gray-300" placeholder="Serie...">
                <x-jet-input-error for="serie" />
            </div>
            <div class="flex flex-row"><!-- Marca -->
                <label class="w-1/3 p-1 text-sm font-semibold  text-gray-800">Marca</label>
                <input wire:model="marca" class="w-2/3 h-6 text-xs font-semibold py-0 px-2 rounded border border-gray-300" placeholder="Marca...">
                <x-jet-input-error for="marca" />
            </div>
            <div class="flex flex-row"><!-- Modelo -->
                <label class="w-1/3 p-1 text-sm font-semibold  text-gray-800">Modelo</label>
                <input wire:model="modelo" class="w-2/3 h-6 text-xs font-semibold py-0 px-2 rounded border border-gray-300" placeholder="Modelo...">
                <x-jet-input-error for="modelo" />
            </div>
            <div class="flex flex-row border-b mb-2 pb-2"><!-- Comentario -->
                <label class="w-1/3 p-1 text-sm font-semibold  text-gray-800">Comentario</label>
                <input wire:model="comentario" class="w-2/3 h-6 text-xs font-semibold py-0 px-2 rounded border border-gray-300" placeholder="Comentario...">
                <x-jet-input-error for="comentario" />
            </div>

            <div class="float-right mt-2"><!-- Botón Agregar Master -->
                <x-jet-danger-button wire:click="save" class="">+ Agregar</x-jet-danger-button>
            </div>

        </div>

        <div class="border border-gray-300 p-2 m-2 rounded  bg-gray-100 col-span-2">
            <table class="bg-yellow-100">
            <tr class="bg-yellow-400 text-gray-800 font-semibold">
                <th class="px-3 py-2 border-b text-xs font-semibold">Master</th>
                <th class="px-3 py-2 border-b text-xs font-semibold">Medida</th>
                <th class="px-3 py-2 border-b text-xs font-semibold">Cliente</th>
                <th class="px-3 py-2 border-b text-xs font-semibold">Asesor</th>
                <th class="px-3 py-2 border-b text-xs font-semibold">Marca</th>
                <th class="px-3 py-2 border-b text-xs font-semibold">Serie</th>
                <th class="px-3 py-2 border-b text-xs font-semibold">Estado</th>
                <th class="px-3 py-2 border-b text-xs font-semibold">Ubicación</th>
            </tr>

            @forelse($searchServicio as $servicio)
            <tr class="border border-b border-white text-xs font-semibold hover:bg-gray-800 hover:text-white hover:text-xl py-0 my-0 cursor-pointer">
              <td class="px-3 py-1 whitespace-nowrap text-xs font-semibold">{{$servicio->master}}-{{ $servicio->item}}</td>
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
              <td class="px-1 py-1 whitespace-nowrap text-xs font-semibold">{{$servicio->medida}}</td>
              <td class="px-1 py-1 whitespace-nowrap text-xs font-semibold">{{$servicio->marca}}</td>
              <td class="px-1 py-1 whitespace-nowrap text-xs font-semibold">{{$servicio->serie}}</td>
              <td class="px-1 py-1 whitespace-nowrap text-xs font-semibold">{{$servicio->estado}}</td>                         
              <td class="px-1 py-1 whitespace-nowrap text-xs font-semibold">{{$servicio->ubicacion}}</td>
            </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-6 py-4 whitespace-nowrap"><span class="text-sm text-gray-600">[Error:01] | </span> No hay registros en servicios...</td>
                </tr>
                
            @endforelse

            <tr class="bg-gray-100">
              <td colspan="9" class="text-right px-2 py-4">{{ $searchServicio->links() }}</td>                              
            </tr>
        </table>
        </div>


    </div>
</div>