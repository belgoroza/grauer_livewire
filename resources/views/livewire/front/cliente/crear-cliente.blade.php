<div>
    <x-jet-danger-button wire:click="$set('open',true)" class="rounded-full w-4 h-6 text-2xl font-semibold"> + </x-jet-danger-button>

    

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">Crear Un Nuevo Cliente</x-slot>

        <x-slot name="content"> 

            <div class="grid grid-cols-1 md:grid-cols-3 gap-2">           
                <div class="mb-4"> <!-- Nombre Cliente -->
                    <x-jet-label value="Nombre del Cliente" class=""/>
                    <x-jet-input type="text" class="w-full" wire:model="nombreCliente" />
                    <x-jet-input-error for="nombreCliente" />
                    
                </div>

                <div class="mb-4"> <!-- Documento -->
                    <x-jet-label value="Documento del Cliente"/>
                    <x-jet-input type="text" class="w-full" wire:model="documentoCliente"/>
                    <x-jet-input-error for="documentoCliente" />
                </div>

                <div> <!-- Telefono -->
                    <x-jet-label value="Teléfono del Cliente"/>
                    <x-jet-input type="text" class="w-full" wire:model="telefonoCliente" />
                    <x-jet-input-error for="telefonoCliente" />
                </div>

                <div class="">
                    <x-jet-label value="Dirección"/>
                    <x-jet-input type="text" class="w-full" wire:model="direccionCliente" />
                    <x-jet-input-error for="direccionCliente" />
                </div>

                <div>
                    <x-jet-label value="Ciudad"/>
                    <x-jet-input type="text" class="w-full" wire:model="ciudadCliente" />
                    <x-jet-input-error for="ciudadCliente" />
                </div>

                <div>
                    <x-jet-label value="Comentario"/>
                    <x-jet-input type="text" class="w-full" wire:model="comentarioCliente" />
                    <x-jet-input-error for="comentarioCliente" />
                </div>
            </div>
        </x-slot>


        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">Cancelar</x-jet-secondary-button>
            <x-jet-danger-button wire:click="save">Crear Cliente</x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>

