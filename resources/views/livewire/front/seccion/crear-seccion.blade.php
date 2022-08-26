<div>

    <x-jet-danger-button wire:click="$set('open',true)">
    	Crear Nueva Sección
    </x-jet-danger-button>


    <x-jet-dialog-modal wire:model="open">

    	<x-slot name="title">
    		Crear Una NUeva Sección
    	</x-slot>


    	<x-slot name="content">
    		
    		<div class="mb-4">
    			
    			<x-jet-label value="Título de la sección"/>
    			<x-jet-input type="text" class="w-full" wire:model="nombreSeccion" /> 

    			<x-jet-input-error for="nombreSeccion" />   			
    			
    		</div>

    		<div class="mb-4">
    			
    			<x-jet-label value="Estado de la sección"/>
    			<x-jet-input type="text" class="w-full"  wire:model.defer="estadoSeccion"/>    			
    			
    			<x-jet-input-error for="estadoSeccion" />  
    		</div>

    	</x-slot>


    	<x-slot name="footer">

    		<x-jet-secondary-button wire:click="$set('open', false)">
    			Cancelar
    		</x-jet-secondary-button>


    		<x-jet-danger-button wire:click="save">
    			Crear Sección
    		</x-jet-danger-button>


    	</x-slot>




    </x-jet-dialog-modal>



</div>
