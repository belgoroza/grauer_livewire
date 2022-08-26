<div>
    <a class="font-bold text-black p-1 rounded cursor-pointer bg-red-300 hover:text-white hover:bg-red-600 " wire:click="$set('open',true)"><i class="fas fa-edit"></i></a>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">Editar Master : {{ $servicio->master }}-{{ $servicio->item }}</x-slot>

        <x-slot name="content">
    		
	       <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
	            

	            <div class="flex flex-col">
	                <label class="w-1/3 text-xs font-semibold text-xs font-semibold">Master</label>
	                <input type="search" wire:model="servicio.master" class="w-full h-6 text-xs font-semibold rounded" placeholder="Master" autofocus="autofocus" >
	                <x-jet-input-error for="servicio.master" />
	            </div>

	            <div class="flex flex-col">
	                <label class="w-1/3 text-xs font-semibold">Item</label>
	                <input type="text" wire:model="servicio.item" class="w-full h-6 text-xs font-semibold rounded" placeholder="Item...">
	                <x-jet-input-error for="servicio.item" />
	            </div>

	            <div class="flex flex-col">
	                <label class="w-1/3 text-xs font-semibold">Recepción</label>
	                <input type="date" wire:model="servicio.fecha_recepcion" class="w-full h-6 text-xs font-semibold rounded">
	                <x-jet-input-error for="servicio.Fecha_recepcion" />
	            </div>



	            <div class="flex flex-col">
	                <label class="w-1/3 text-xs font-semibold">Oficina</label>
	                <select name="ciudad" wire:model="servicio.oficina" class="w-full h-6 py-0 text-xs font-semibold rounded" >
	                   <option value=""></option>
	                   <option value="STO DGO">STO DGO</option>                        
	                  <option value="PK7">PK7</option>                        
	                  <option value="ESMERALDAS">ESMERALDAS</option>                        
	                  <option value="QUEVEDO">QUEVEDO</option>                        
	                  <option value="LAGO AGRIO">LAGO AGRIO</option>                       
	                  <option value="LAGO AGRIO">LA CHONE</option>                       
	                  <option value="LAGO AGRIO">LA PAZ</option>                       
	                </select>
	                <x-jet-input-error for="servicio.oficina" />
	            </div>
	            <div class="flex flex-col">
	                <label class="w-1/3 text-xs font-semibold">Asesor</label>
	                <select name="asesor" wire:model="servicio.asesor_id" class="w-full h-6 py-0 text-xs font-semibold rounded" >
	                  <option value=""></option>
	                    @if($asesores)
	                        @foreach ($asesores as $asesor)
	                          <option value="{{$asesor->id}}">{{ $asesor->nombre }}</option>
	                        @endforeach
	                    @else
	                        no data
	                    @endif
	                </select>
	                <x-jet-input-error for="servicio.asesor_id" />
	            </div>
	            <div class="flex flex-col">
	                <div class="flex flex-between">
	                    <label class="w-1/3 text-xs font-semibold">Cliente</label>
	                </div>
	                <select name="cliente" wire:model="servicio.cliente_id" class="w-full h-6 py-0 text-xs font-semibold rounded" >
	                  <option value=""></option>
	                    @if($clientes)
	                        @foreach ($clientes as $cliente)
	                          <option value="{{$cliente->id}}">{{ $cliente->nombre }}</option>
	                        @endforeach
	                    @else
	                        no data
	                    @endif
	                </select>
	                <x-jet-input-error for="servicio.cliente_id" />
	            </div>

	            <div class="flex flex-col">
	                <label class="w-1/3 text-xs font-semibold">Medida</label>
	                <input type="text" wire:model="servicio.medida" class="w-full h-6 text-xs font-semibold rounded" placeholder="Medida">
	                <x-jet-input-error for="servicio.medida" />
	            </div>
	            <div class="flex flex-col">
	                <label class="w-1/3 text-xs font-semibold">Marca</label>
	                <input type="text" wire:model="servicio.marca" class="w-full h-6 text-xs font-semibold rounded" placeholder="Marca">
	                <x-jet-input-error for="servicio.marca" />
	            </div>
	            <div class="flex flex-col">
	                <label class="w-1/3 text-xs font-semibold">Serie</label>
	                <input type="text" wire:model="servicio.serie" class="w-full h-6 text-xs font-semibold rounded" placeholder="Serie">
	                <x-jet-input-error for="servicio.serie" />
	            </div>

	            
	            <div class="flex flex-col">
	                <label class="w-1/3 text-xs font-semibold">Modelo</label>
	                <input type="text" wire:model="servicio.modelo" class="w-full h-6 text-xs font-semibold rounded" placeholder="Modelo">
	                <x-jet-input-error for="servicio.modelo" />
	            </div>
	            <div class="flex flex-col">
	                <label class="w-1/3 text-xs font-semibold">Comentario</label>
	                <input type="text" wire:model="servicio.comentario" class="w-full h-6 text-xs font-semibold rounded" placeholder="Comentario">	                
	                <x-jet-input-error for="servicio.comentario" />
	            </div>
	            <div class="flex flex-col">
	                <label class="w-1/3 text-xs font-semibold">Planta</label>
	                <input type="date" wire:model="servicio.fecha_planta" class="w-full h-6 text-xs font-semibold rounded">
	                <x-jet-input-error for="servicio.fecha_planta" />
	            </div>

	        </div>
		   
    	</x-slot>


    	<x-slot name='footer'>
    		<x-jet-secondary-button wire:click="$set('open', false)">Cancelar</x-jet-secondary-button>
            <x-jet-danger-button wire:click="save">Editar Servicio</x-jet-danger-button>
    	</x-slot>



    </x-jet-dialog-modal>




</div>
