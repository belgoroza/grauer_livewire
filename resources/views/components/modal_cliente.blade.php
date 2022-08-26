<div>

    <div class="py-2 px-2 flex justify-between border-b">
        <span class="text-pink-600 font-semibold">Formulario crear nuevo cliente</span>
        <a href="{{ route('clientes')}}" class="p-2 rounded font-sembold text-white bg-yellow-400 hover:bg-gray-800">Lista de Cliente</a>
    </div>

    @if(session()->has('message'))
        <div class="p-3 bg-green-600 text-white font-semibold">
            {{ session('message')}}
        </div>

    @endif

    <div class="bg-gray-200 m-2 rounded border-b">
        <div class="mb-4 grid grid-cols-1 md:grid-cols-3 gap-4 m-2 py-3">
            <div>
                <x-jet-label value="Nombre del Cliente"/>
                <x-jet-input type="text" class="w-full" wire:model="nombreCliente" />
                <x-jet-input-error for="nombreCliente" />
            </div>

            <div>
                <x-jet-label value="Documento del Cliente"/>
                <x-jet-input type="text" class="w-full" wire:model="documentoCliente" />
                <x-jet-input-error for="documentoCliente" />
            </div>

            <div>
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
    </div>


    <div class="border-t">

        <div class="">
            <x-jet-danger-button wire:click="save" class="float-right m-2">
                Crear Cliente
            </x-jet-danger-button>
        </div>
    </div>


</div>