<div>
    <a class="font-bold text-black p-1 rounded cursor-pointer bg-red-300 hover:text-white hover:bg-red-600 " wire:click="$set('open',true)"><i class="fas fa-edit"></i></a>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">Editar Master : {{ $producto->id }}-{{ $producto->id }}</x-slot>

        <x-slot name="content">
    		
    		<div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-gray-800">	            

	            <div class="flex flex-col">
	                <label class="w-1/3  font-semibold">Sección</label>
	                <select wire:model="producto.seccion_id" class="w-full h-6 py-0 font-semibold rounded" >
	                  <option value=""></option>
	                    @if($secciones)
	                        @foreach ($secciones as $seccion)
	                          <option value="{{$seccion->id}}">{{ ucwords($seccion->name) }}</option>
	                        @endforeach
	                    @else
	                        no data
	                    @endif
	                </select>
	                <x-jet-input-error for="producto.seccion" />
	            </div>

	            <div class="flex flex-col">
	                <label class="w-1/3  font-semibold">Categoría</label>
	                <select wire:model="producto.categoria_id" class="w-full h-6 py-0  font-semibold rounded" >
	                  <option value=""></option>
	                    @if($categorias)
	                        @foreach ($categorias as $categoria)
	                          <option value="{{$categoria->id}}">{{ ucwords($categoria->category_name) }}</option>
	                        @endforeach
	                    @else
	                        no data
	                    @endif
	                </select>
	                <x-jet-input-error for="producto.categoria" />
	            </div>

	            <div class="flex flex-col">
	                <label class="w-1/3  font-semibold  font-semibold">Código</label>
	                <input type="text" wire:model="producto.codigo" class="w-full h-6  font-semibold rounded" placeholder="Código..." >
	                <x-jet-input-error for="producto.codigo" />
	            </div>

	            <div class="flex flex-col">
	                <label class="w-1/3  font-semibold">Descripcion</label>
	                <input type="text" wire:model="producto.descripcion" class="w-full h-6  font-semibold rounded" placeholder="Descripcion...">
	                <x-jet-input-error for="producto.descripcion" />
	            </div>

	            <div class="flex flex-col">
	                <label class="w-1/3  font-semibold">Diseño</label>
	                <input type="text" wire:model="producto.diseno" class="w-full h-6  font-semibold rounded" placeholder="Diseño...">
	                <x-jet-input-error for="producto.diseno" />
	            </div>

	            <div class="flex flex-col">
	                <label class="w-1/3  font-semibold">Banda</label>
	                <select name="ciudad" wire:model="producto.banda" class="w-full h-6 py-0  font-semibold rounded" >
	                   <option value=""></option>
	                   <option value="CONTITREAD">CONTITREAD</option>                        
	                  <option value="INDELBAND">INDELBAND</option>                        
	                  <option value="TECNOTREAD">TECNOTREAD</option>
	                </select>
	                <x-jet-input-error for="producto.banda" />
	            </div>

	            <div class="flex flex-col">
	                <div class="flex flex-between">
	                    <label class="w-1/3  font-semibold">Status</label>
	                </div>
	                <select name="ciudad" wire:model="producto.status" class="w-full h-6 py-0  font-semibold rounded" >
	                   <option value=""></option>
	                   <option value="1">ACTIVO</option>                        
	                  <option value="0">INACTIVO</option> 
	                </select>
	                <x-jet-input-error for="producto.status" />
	            </div>

	            <div class="flex flex-col">
	                <div class="flex flex-between"><label class="w-1/3  font-semibold">Precio</label></div>
	                <input type="text" wire:model="producto.precio" class="w-full h-6  font-semibold rounded" placeholder="Precio...">
	                <x-jet-input-error for="producto.precio" />
	            </div>

	            <div class="flex flex-col">
	                <label class="w-1/3  font-semibold">Comentario</label>
	                <input type="text" wire:model="producto.comentario" class="w-full h-6  font-semibold rounded" placeholder="Comentario...">
	                <x-jet-input-error for="producto.comentario" />
	            </div>

	            
	        </div>
	      
		   
    	</x-slot>


    	<x-slot name='footer'>
    		<x-jet-secondary-button wire:click="$set('open', false)">Cancelar</x-jet-secondary-button>
            <x-jet-danger-button wire:click="save">Editar Producto</x-jet-danger-button>
    	</x-slot>



    </x-jet-dialog-modal>




</div>
