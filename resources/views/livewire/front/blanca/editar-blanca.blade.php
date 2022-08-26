<div>
    <a class="font-bold text-black p-1 rounded cursor-pointer bg-red-300 hover:text-white hover:bg-red-600 " wire:click="$set('open',true)"><i class="fas fa-edit"></i></a>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">Editar Blanca : {{ $blanca->id }}-{{ $blanca->id }}</x-slot>

        <x-slot name="content">
            
           <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                

                <div class="flex flex-col">
                    <label class="text-pink-800 text-xs font-semibold">Oficina</label>
                    <select name="ciudad" wire:model="blanca.oficina" class="h-6 py-0 px-2 border border-blue-400 text-xs font-bold rounded" >
                       <option value=""></option>
                       <option value="STO DGO">STO DGO</option>
                      <option value="PK7">PK7</option>
                      <option value="ESMERALDAS">ESMERALDAS</option>
                      <option value="QUEVEDO">QUEVEDO</option>
                      <option value="LAGO AGRIO">LAGO AGRIO</option>
                      <option value="LAGO AGRIO">LA CHONE</option>
                      <option value="LAGO AGRIO">LA PAZ</option>
                    </select>
                    <x-jet-input-error for="blanca.oficina" /> {{ $oficina }}
                </div>

                <div class="flex flex-col">
                    <label class="text-pink-800 text-xs font-semibold">Código</label>
                    <input type="text" wire:model="blanca.codigo" class="w-full h-6 text-xs font-bold rounded" placeholder="Código...">
                    <x-jet-input-error for="blanca.codigo" />
                </div>

                <div class="flex flex-col">
                    <label class="text-pink-800 -xs font-semibold">Medida</label>
                    <input type="text" wire:model="blanca.medida" class="w-full h-6 text-xs font-bold rounded" placeholder="Medida...">
                    <x-jet-input-error for="blanca.medida" />
                </div>

                <div class="flex flex-col">
                    <label class="text-pink-800 text-xs font-semibold">Marca</label>
                    <input type="text" wire:model="blanca.marca" class="w-full h-6 text-xs font-bold rounded" placeholder="Marca...">
                    <x-jet-input-error for="blanca.marca" />
                </div>

                <div class="flex flex-col">
                    <label class="text-pink-800 text-xs font-semibold">Serie</label>
                    <input type="text" wire:model="blanca.serie" class="w-full h-6 text-xs font-bold rounded" placeholder="Serie...">
                    <x-jet-input-error for="blanca.serie" />
                </div>

                <div class="flex flex-col">
                    <label class="text-pink-800 text-xs font-semibold">Ubicación</label>
                    <input type="text" wire:model="blanca.ubicacion" class="w-full h-6 text-xs font-bold rounded" placeholder="Ubicación...">
                    <x-jet-input-error for="blanca.ubicacion" />
                </div>

                <div class="flex flex-col">
                    <label class="text-pink-800 text-xs font-semibold">Fecha de Ingreso</label>
                    <input type="date" wire:model="blanca.ingreso_fecha" class="w-full h-6 text-xs font-bold rounded">
                    <x-jet-input-error for="blanca.ingreso_fecha" />
                </div>

                <div class="flex flex-col">
                    <label class="text-pink-800 text-xs font-semibold">Tipo de Documento</label>
                    <select wire:model="blanca.ingreso_tipo" class="h-6 py-0 px-2 border border-blue-400 text-xs font-bold rounded" >
                       <option value=""></option>
                       <option value="FACTURA">FACTURA</option>                        
                      <option value="GUIA DE REMISION">GUIA DE REMISION</option>                        
                      <option value="TRANSFERENCIA">TRANSFERENCIA</option>                        
                      <option value="SIN DOCUMENTO">SIN DOCUMENTO</option>               
                    </select>
                    <x-jet-input-error for="blanca.ingreso_tipo" />
                </div>

                <div class="flex flex-col">
                    <label class="text-pink-800 text-xs font-semibold">Número de Documento</label>
                    <input type="text" wire:model="blanca.ingreso_numero" class="w-full h-6 text-xs font-bold rounded">
                    <x-jet-input-error for="blanca.ingreso_numero" />
                </div>

                <div class="flex flex-col">
                    <label class="text-pink-800 text-xs font-semibold">Origen del Ingreso</label>
                    <!-- <input type="text" wire:model="blanca.ingreso_origen" class="w-full h-6 text-xs font-semibold rounded"> -->
                    <select wire:model="blanca.ingreso_origen" class="h-6 py-0 px-2 border border-blue-400 text-xs font-bold rounded" >
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
                    <x-jet-input-error for="blanca.ingreso_origen" />
                </div>

                <div class="flex flex-col col-span-2">
                    <label class="text-pink-800 text-xs font-semibold">Comentario Ingreso</label>
                    <input type="text" wire:model="blanca.ingreso_comentario" class="w-full h-6 text-xs font-bold rounded">
                    <x-jet-input-error for="blanca.ingreso_comentario" />
                </div>

                

            </div>
           
        </x-slot>


        <x-slot name='footer'>
            <x-jet-secondary-button wire:click="$set('open', false)">Cancelar</x-jet-secondary-button>
            <x-jet-danger-button wire:click="save">Editar Blanca</x-jet-danger-button>
        </x-slot>



    </x-jet-dialog-modal>




</div>
