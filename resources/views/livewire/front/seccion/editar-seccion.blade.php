<div>
    <a class="font-bold text-black p-1 rounded cursor-pointer bg-red-300 hover:text-white hover:bg-red-600 " wire:click="$set('open',true)"><i class="fas fa-edit"></i></a>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">Editar Sección : {{ $seccion->id }}-{{ $seccion->id }}</x-slot>

        <x-slot name="content">
    		
    		<div class="mb-4">
    			
    			<x-jet-label value="Título de la sección"/>
    			<x-jet-input type="text" class="w-full" wire:model="seccion.name" />
    			<x-jet-input-error for="seccion.name" />   			
    			
    		</div>

    		<div class="mb-4">
    			
    			<x-jet-label value="Estado de la sección"/>
    			<select wire:model="seccion.status" class="w-full h-10 text-sm font-bold py-0 rounded" >
                   <option value=""></option>
                   <option value="1">ACTIVO</option>
                   <option value="2">INACTIVO</option>
                </select>
    			<x-jet-input-error for="seccion.status" />  
    		</div>
	      
		   
    	</x-slot>


    	<x-slot name='footer'>
    		<x-jet-secondary-button wire:click="$set('open', false)">Cancelar</x-jet-secondary-button>
            <x-jet-danger-button wire:click="save">Editar Sección</x-jet-danger-button>
    	</x-slot>



    </x-jet-dialog-modal>




</div>
