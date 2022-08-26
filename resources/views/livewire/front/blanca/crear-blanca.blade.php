<div>
    @if(session()->has('message'))
        <div class="p-3 bg-green-600 text-white font-semibold">
            {{ session('message')}}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 bg-gray-100 border border-gray-300">
      <span class="float-left p-2 text-pink-800 font-bold">Crear nuevo registro para llanta blanca</span>
    

      <!-- <div class="my-2 mr-2">
        <button type="button" class="p-2 mr-2 bg-blue-600 text-white p-0 rounded leading-none float-right">
            New
        </button>        
      </div> -->

        <div class="my-2 mr-2">
            <a href="{{ route('blancas') }}" class="p-2 mr-2 bg-blue-600 text-white p-0 rounded leading-none float-right hover:bg-gray-800">Listado de blancas</a>
        </div>
    </div>
    

    <div class="grid grid-cols-1 md:grid-cols-3">
        <div class="border border-gray-300 p-2 m-2 rounded bg-gray-100">
            <div class="flex flex-row"><!-- Oficina -->
                <label class="w-1/3 p-1 text-sm font-bold text-gray-800">Oficina</label>
                <select name="ciudad" wire:model="oficina" class="w-2/3 h-6 py-0 px-2 border border-blue-400 text-xs font-bold rounded" >
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
            <div class="flex flex-row"><!-- Producto -->
                <label class="w-1/3 p-1 text-sm font-bold text-gray-800">Producto</label>
                <!-- <input type="number" wire:model="cliente" class="w-2/3 h-6 text-xs font-bold py-0 rounded"> -->
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
                          updateSelected(id, descripcion) 
                          {
                            this.selected = id;
                            this.search = descripcion;
                            this.open = false;
                            this.highlightedIndex = 0;
                          },
                      }">

                        <div
                            x-on:value-selected="updateSelected($event.detail.id, $event.detail.descripcion)">
                            <span>
                              <div class="flex flex-row">
                                <input
                                  wire:model.debounce.300ms="search"
                                  x-on:keydown.arrow-down.stop.prevent="highlightNext()"
                                  x-on:keydown.arrow-up.stop.prevent="highlightPrevious()"
                                  x-on:keydown.enter.stop.prevent="$dispatch('value-selected', {
                                    id: $refs.results.children[highlightedIndex].getAttribute('data-result-id'),
                                    descripcion: $refs.results.children[highlightedIndex].getAttribute('data-result-descripcion')
                                  })" class="w-full h-6 text-xs font-bold px-2 rounded border border-blue-300">
                                  <span class="pl-4"> @livewire('front.producto.crear-producto')</span>
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
                                        descripcion: '{{ $result->descripcion }}'
                                      })"
                                      :class="
                                      {
                                        'bg-green-200': {{ $index }} === highlightedIndex,
                                        'text-gray-800': {{ $index }} === highlightedIndex
                                      }"
                                      data-result-id="{{ $result->id }}"
                                      data-result-descripcion="{{ $result->descripcion }}" class="cursor-pointer">
                                        <span wire:click="ProductoId({{ $result->id }})" class="text-xs font-bold">{{ $result->codigo }} | {{ $result->descripcion }}</span>
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
            
            <div class="flex flex-row"><!-- Carcasa -->
                <label class="w-1/3 p-1 text-sm font-bold text-gray-800">Carcasa</label>
                <input wire:model="marca" class="w-2/3 h-6 py-0 px-2 border border-blue-400 text-xs font-bold rounded" placeholder="Carcasa...">
                <x-jet-input-error for="marca" />
            </div>
            <div class="flex flex-row"><!-- Serie -->
                <label class="w-1/3 p-1 text-sm font-bold text-gray-800">Serie</label>
                <input type="number" wire:model="serie" class="w-2/3 h-6 py-0 px-2 border border-blue-400 text-xs font-bold rounded">
                <x-jet-input-error for="serie" />
            </div>
            <div class="flex flex-row"><!-- Ubicación -->
                <!-- <label class="w-1/3 p-1 text-sm font-bold text-gray-800">Ubicacion</label>
                <input wire:model="ubicacion" class="w-2/3 h-6 py-0 px-2 border border-blue-400 text-xs font-bold rounded" placeholder="Ubicacion...">
                <x-jet-input-error for="ubicacion" /> -->
            </div>
            <div class="flex flex-row border-b"><!-- Status -->
                <label class="w-1/3 p-1 text-sm font-bold text-gray-800">Status</label>
                <select wire:model="status" class="w-2/3 h-6 py-0 px-2 border border-blue-400 text-xs font-bold rounded" >
                   <option value=""></option>
                   <option value="1">ACTIVO</option>
                  <option value="2">INACTIVO</option>
                </select>
                <x-jet-input-error for="status" />
            </div>
            
            <div class="flex flex-row pt-2"><!-- Ingreso Fecha -->
                <label class="w-1/3 p-1 text-sm font-bold text-gray-800">Fecha de Ingreso</label>
                <input type="date" wire:model="ingresoFecha" class="w-2/3 h-6 py-0 px-2 border border-blue-400 text-xs font-bold rounded" placeholder="Fecha de Ingreso...">
                <x-jet-input-error for="ingresoFecha" />
            </div>
            <div class="flex flex-row"><!-- Ingreso Tipo -->
                <label class="w-1/3 p-1 text-sm font-bold text-gray-800">Tipo Ingreso</label>
                <select wire:model="ingresoTipo" class="w-2/3 h-6 py-0 px-2 border border-blue-400 text-xs font-bold rounded" >
                   <option value=""></option>
                   <option value="FACTURA">FACTURA</option>                        
                  <option value="GUIA DE REMISION">GUIA DE REMISION</option>                        
                  <option value="TRANSFERENCIA">TRANSFERENCIA</option>                        
                  <option value="SIN DOCUMENTO">SIN DOCUMENTO</option>               
                </select>
                <x-jet-input-error for="ingresoTipo" />
            </div>
            <div class="flex flex-row"><!-- Ingreso Numero -->
                <label class="w-1/3 p-1 text-sm font-bold text-gray-800">Ingreso Número</label>
                <input wire:model="ingresoNumero" class="w-2/3 h-6 py-0 px-2 border border-blue-400 text-xs font-bold rounded" placeholder="Ingreso Número...">
                <x-jet-input-error for="ingresoNumero" />
            </div>
            <div class="flex flex-row"><!-- Ingreso Origen -->
                <label class="w-1/3 p-1 text-sm font-bold text-gray-800">Origen</label>
                <select wire:model="ingresoOrigen" class="w-2/3 h-6 py-0 px-2 border border-blue-400 text-xs font-bold rounded" >
                   <option value=""></option>
                   <option value="NTE | STO DGO">NTE | STO DGO</option>
                   <option value="NTE | PK7">NTE | PK7</option>
                   <option value="NTE | ESMERALDAS">NTE | ESMERALDAS</option>
                   <option value="NTE | QUEVEDO 1">NTE | QUEVEDO 1</option>
                   <option value="NTE | QUEVEDO 2">NTE | QUEVEDO 2</option>
                   <option value="NTE | BABAHOYO 1">NTE | BABAHOYO 1</option>
                   <option value="NTE | BABAHOYO 2">NTE | BABAHOYO 2</option>
                   <option value="NTE | VENTANAS">NTE | VENTANAS</option>
                   <option value="NTE | TULCAN">NTE | TULCAN</option>
                   <option value="NTE | AMBATO">NTE | AMBATO</option>
                   <option value="NTE | GRANADOS">NTE | GRANADOS</option>
                   <option value="NTE | LAGO AGRIO">NTE | LAGO AGRIO</option>
                   <option value="RENOVALLANTA | QUITO">RENOVALLANTA | QUITO</option>
                   <option value="RENOVALLANTA | CUENCA">RENOVALLANTA | CUENCA</option>
                </select>
                <x-jet-input-error for="ingresoOrigen" />
            </div>
            <div class="flex flex-row border-b mb-2 pb-2"><!-- Comentario -->
                <label class="w-1/3 p-1 text-sm font-bold text-gray-800">Comentario</label>
                <input wire:model="ingresoComentario" class="w-2/3 h-6 py-0 px-2 border border-blue-400 text-xs font-bold rounded" placeholder="Comentario...">
                <x-jet-input-error for="ingresoComentario" />
            </div>

            <div class="float-right mt-2"><!-- Botón Agregar Master -->
                <x-jet-danger-button wire:click="save" class="">+ Agregar</x-jet-danger-button>
            </div>

        </div>

        <div class="border border-gray-300 p-2 m-2 rounded  bg-gray-100 col-span-2">
            <table class="">
            <tr class="bg-yellow-400 text-gray-800 font-semibold">
                <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase">Código </th>
                <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase">Medida</th>
                <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase">Marca</th>
                <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase">Serie</th>
                <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase">Ingreso</th>
                <th class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase">Origen</th>
            </tr>

            @forelse($resultados as $blanca)
            <tr class="border border-b border-gray-200 text-xs font-semibold hover:bg-yellow-400  hover:text-xl py-0 my-0 cursor-pointer">
                @foreach($blanca->productos as $producto)
                    <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{ $producto->codigo }}</td>
                    <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{ $producto->descripcion }}</td>
                @endforeach
              <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{$blanca->marca}}</td>
              <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{$blanca->serie}}</td>
              <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{$blanca->ingreso_fecha}}</td>
              <td class="px-6 py-1 whitespace-nowrap text-xs font-semibold">{{$blanca->ingreso_origen}}</td>
            </tr>
            @empty
            <tr>
                <td colspan="10" class="px-6 py-1 whitespace-nowrap"><span class="text-sm text-gray-600">  No hay registros en blancas...</span></td>
            </tr>                
            @endforelse
            <tr>
              <td colspan="10" class="text-right px-2 py-4">{{ $resultados->links() }}</td>                              
            </tr>
        </table>
        </div>


    </div>
</div>