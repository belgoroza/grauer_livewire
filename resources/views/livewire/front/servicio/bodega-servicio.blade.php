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
                        <input class="px-2 h-6 border border-blue-300 rounded text-blue-800 font-semibold" wire:model="numeroDoc">
                        <x-jet-input-error for="numeroDoc" />
                    </div>

                    <div class="flex flex-col">
                        <label>Fecha</label>
                        <input type="date" class="h-6 border border-blue-300 rounded text-black" wire:model="fecha">
                        <x-jet-input-error for="fecha" />
                    </div>

                    <div class="flex flex-col">
                        <label>Estado</label>
                        <select class="px-2 py-0 h-6 w-24 border border-blue-300 rounded text-blue-800 font-semibold" wire:model="estado">
                            <option value="">...</option>
                            <option value="OK">OK</option>
                            <option value="FAILED">FAILED</option>
                        </select>
                        <x-jet-input-error for="estado" />
                    </div>
                    <div class="flex flex-col">
                        <label>Buscar Formulario</label>
                        <input type="search" wire:model="producto" class="px-2 py-0 h-6 border border-blue-300 rounded text-blue-800 font-semibold">
                    </div>
                    <div class="flex flex-col py-2 text-pink-800"> @livewire('front.producto.crear-producto')</div>
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
                              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer">Código</th>
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
                              <td class="px-6 py-4 whitespace-nowrap text-xs font-semibold">{{$servicio->ubicacion}}</td>
                              <td class="px-6 py-4 whitespace-nowrap text-xs font-semibold">{{$servicio->master}}-{{ $servicio->item}}</td>
                              <td class="px-6 py-4 whitespace-nowrap text-xs font-semibold">{{$servicio->item}}</td>
                              <td class="px-6 py-4 whitespace-nowrap text-xs font-semibold">{{$servicio->medida}}</td>                              
                              <td class="px-6 py-4 whitespace-nowrap text-xs font-semibold">{{$servicio->marca}}</td>
                              <td class="px-6 py-4 whitespace-nowrap text-xs font-semibold">{{$servicio->estado}}</td>

                              @if($estado == "OK")
                                <td>
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
                                              updateSelected(id, codigo) 
                                              {
                                                this.selected = id;
                                                this.search = codigo;
                                                this.open = false;
                                                this.highlightedIndex = 0;
                                              },
                                          }">

                                            <div
                                                x-on:value-selected="updateSelected($event.detail.id, $event.detail.codigo)">
                                                <span>
                                                  <div>
                                                    <input
                                                      wire:model.debounce.300ms="search"
                                                      x-on:keydown.arrow-down.stop.prevent="highlightNext()"
                                                      x-on:keydown.arrow-up.stop.prevent="highlightPrevious()"
                                                      x-on:keydown.enter.stop.prevent="$dispatch('value-selected', {
                                                        id: $refs.results.children[highlightedIndex].getAttribute('data-result-id'),
                                                        codigo: $refs.results.children[highlightedIndex].getAttribute('data-result-codigo')
                                                      })" class="px-2 w-24 h-6 border border-blue-300 rounded text-blue-800 font-bold">
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
                                                            codigo: '{{ $result->codigo }}'
                                                          })"
                                                          :class="
                                                          {
                                                            'bg-indigo-400': {{ $index }} === highlightedIndex,
                                                            'text-white': {{ $index }} === highlightedIndex
                                                          }"
                                                          data-result-id="{{ $result->id }}"
                                                          data-result-codigo="{{ $result->codigo }}" class="cursor-pointer">
                                                            <span wire:click="productoId({{ $result->id }})" class="text-xs font-semibold">{{ $result->codigo }} | {{ $result->descripcion }}</span>
                                                        </li>
                                                      @empty
                                                        <li>No results found</li>
                                                      @endforelse
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="flex flex-between gap-2">
                                        <a wire:click="ingresoBodega({{ $servicio->id }})" class="font-bold text-black p-2 rounded cursor-pointer bg-green-300 hover:text-white hover:bg-green-600 " >In</a>
                                        <span class="py-2"> @livewire('front.servicio.editar',['servicio' => $servicio], key($servicio->id))</span>
                                    </div>
                                </td>
                              @else
                                <td><span class="w-full px-2 rounded border border-blue-300 font-semibold">FAILED</span></td>
                                <td>
                                    <div class="flex flex-between gap-2">
                                        <a wire:click="ingresoBodegaFail({{ $servicio->id }})" class="font-bold text-black p-2 rounded cursor-pointer bg-blue-300 hover:text-white hover:bg-blue-600 " >Reg</a>
                                        <span class="py-2"> @livewire('front.servicio.editar',['servicio' => $servicio], key($servicio->id))</span>
                                    </div>
                                </td>
                              @endif                                              
                              
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






<!-- *********************************************************************************************************** --



















