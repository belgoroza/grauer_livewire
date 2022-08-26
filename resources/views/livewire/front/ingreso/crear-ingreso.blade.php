<div>
    <x-jet-danger-button wire:click="$set('open',true)" class="rounded-full w-4 h-6 text-2xl font-semibold"> + </x-jet-danger-button>
    @if(session()->has('message'))
        <div class="p-3 bg-green-600 text-white font-semibold">
            {{ session('message')}}
        </div>
    @endif

    <x-jet-dialog-modal wire:model="open">

        
        <x-slot name="title"><span class="text-pink-600 border-b">Crear Un Nuevo Ingreso</span></x-slot>

        <x-slot name="content">


            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
               <div class="mb-4">
                    <x-jet-label value="Fecha"/>
                    <x-jet-input type="date" class="w-full" wire:model="fechaIngreso" />
                    <x-jet-input-error for="fechaIngreso" />                    
                </div>
                <div class="mb-4">
                <x-jet-label value="Tipo"/>
                    <select class="form-control w-full" wire:model="tipo">
                        <option value=""></option>
                        <option value="SERVICIO">SERVICIO</option>
                        <option value="BLANCA">BLANCA</option>
                        <option value="RECLAMO">RECLAMO</option>
                        <option value="RECLAMO">RECLAMO</option>
                        <option value="REPARACION">REPARACION</option>
                    </select>
                    <x-jet-input-error for="tipo" />
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="mb-4">
                    <x-jet-label value="Estado"/>
                    <select class="form-control w-full" wire:model="estado">
                        <option value=""></option>
                        <option value="OK">OK</option>
                        <option value="FAILED">FAILED</option>
                    </select>
                    <x-jet-input-error for="estado" />
                </div>

                <div class="mb-4">
                    <x-jet-label value="Documento Tipo"/>
                    <select class="form-control w-full" wire:model="documentoTipo">
                        <option value=""></option>
                        <option value="FACTURA">FACTURA</option>
                        <option value="TRANSFERENCIA">TRANSFERENCIA</option>
                        <option value="GUIA DE REMISION">GUIA DE REMISION</option>
                    </select>
                    <x-jet-input-error for="documentoTipo" />
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="">
                    <x-jet-label value="Documento Numero"/>
                    <x-jet-input type="text" class="w-full" wire:model="documentoNumero" />
                    <x-jet-input-error for="documentoNumero" />
                </div>

                <div class="mb-4">
                    <x-jet-label value="Oficina"/>
                    <select class="form-control w-full" wire:model="OficinaIngreso">
                        <option value=""></option>
                        <option value="STO DGO">STO DGO</option>
                        <option value="PK7">PK7</option>
                        <option value="ESMERALDAS">ESMERALDAS</option>
                    </select>
                    <x-jet-input-error for="OficinaIngreso" />
                </div>
            </div>         

            

            <div>
                <x-jet-label value="Comentario"/>
                <x-jet-input type="text" class="w-full" wire:model="comentario" />
                <x-jet-input-error for="comentario" />
            </div>
        </x-slot>


        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">Cancelar</x-jet-secondary-button>
            <x-jet-danger-button wire:click="save">Crear Ingreso</x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>

