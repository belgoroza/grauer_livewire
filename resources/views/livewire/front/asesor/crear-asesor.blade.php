<div>

    <div class="py-2 px-2 flex justify-between border-b">
        <span class="text-pink-600 font-semibold">Formulario crear nuevo asesor</span>
        <a href="{{ route('asesores')}}" class="p-2 rounded font-sembold text-white bg-yellow-400 hover:bg-gray-800">Lista de Asesores</a>
    </div>

    @if(session()->has('message'))
        <div class="p-3 bg-green-600 text-white font-semibold">
            {{ session('message')}}
        </div>

    @endif

    <div class="bg-gray-200 m-2 rounded border-b">
        <div class="mb-4 grid grid-cols-1 md:grid-cols-3 gap-4 m-2 py-3">
            <div>
                <x-jet-label value="Nombre del Asesor"/>
                <x-jet-input type="text" class="w-full" wire:model="nombreAsesor" />
                <x-jet-input-error for="nombreAsesor" />
            </div>

            <div>
                <x-jet-label value="Documento del Asesor"/>
                <x-jet-input type="text" class="w-full" wire:model="documentoAsesor" />
                <x-jet-input-error for="documentoAsesor" />
            </div>

            <div>
                <x-jet-label value="Teléfono del Asesor"/>
                <x-jet-input type="text" class="w-full" wire:model="telefonoAsesor" />
                <x-jet-input-error for="telefonoAsesor" />
            </div>

            <div class="">
                <x-jet-label value="Dirección"/>
                <x-jet-input type="text" class="w-full" wire:model="direccionAsesor" />
                <x-jet-input-error for="direccionAsesor" />
            </div>

            <div>
                <x-jet-label value="Ciudad"/>
                <x-jet-input type="text" class="w-full" wire:model="ciudadAsesor" />
                <x-jet-input-error for="ciudadAsesor" />
            </div>

            <div>
                <x-jet-label value="Comentario"/>
                <x-jet-input type="text" class="w-full" wire:model="comentarioAsesor" />
                <x-jet-input-error for="comentarioAsesor" />
            </div>
        </div>
    </div>


    <div class="border-t">

        <div class="">
            <x-jet-danger-button wire:click="save" class="float-right m-2">
                Crear Asesor
            </x-jet-danger-button>
        </div>
    </div>


</div>