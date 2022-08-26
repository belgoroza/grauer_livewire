<div>
    <x-jet-danger-button wire:click="$set('open',true)" class="h-6 rounded w-full text-xs font-semibold">+ADD</x-jet-danger-button>

    @if(session()->has('message'))
    	<div x-data="{ show: true }" x-show="show"
		    class="flex justify-between items-center bg-green-300 relative text-gray-700 py-3 px-3 rounded-lg">
		    <div>
		        <span class="font-semibold text-gray-700">{{ session('message')}}</span>
		    </div>
		    <div>
		        <button type="button" @click="show = false" class=" text-gray-700">
		            <span class="text-2xl">&times;</span>
		        </button>
		    </div>
		</div>
    @endif

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">Crear Un Nuevo Producto</x-slot>

        <x-slot name="content">
            

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
	            

	            <div class="flex flex-col">
	                <label class="w-1/3  font-semibold">Sección</label>
	                <select name="asesor" wire:model="seccion" class="w-full h-6 py-0 font-semibold rounded" >
	                  <option value=""></option>
	                    @if($secciones)
	                        @foreach ($secciones as $seccion)
	                          <option value="{{$seccion->id}}">{{ ucwords($seccion->name) }}</option>
	                        @endforeach
	                    @else
	                        no data
	                    @endif
	                </select>
	                <x-jet-input-error for="seccion" />
	            </div>

	            <div class="flex flex-col">
	                <label class="w-1/3  font-semibold">Categoría</label>
	                <select name="cliente" wire:model="categoria" class="w-full h-6 py-0  font-semibold rounded" >
	                  <option value=""></option>
	                    @if($categorias)
	                        @foreach ($categorias as $categoria)
	                          <option value="{{$categoria->id}}">{{ ucwords($categoria->category_name) }}</option>
	                        @endforeach
	                    @else
	                        no data
	                    @endif
	                </select>
	                <x-jet-input-error for="categoria" />
	            </div>

	            <div class="flex flex-col">
	                <label class="w-1/3  font-semibold  font-semibold">Código</label>
	                <input type="search" wire:model="codigo" class="w-full h-6  font-semibold rounded" placeholder="Código..." >
	                <x-jet-input-error for="codigo" />
	            </div>

	            <div class="flex flex-col">
	                <label class="w-1/3  font-semibold">Descripcion</label>
	                <input type="text" wire:model="descripcion" class="w-full h-6  font-semibold rounded" placeholder="Descripcion...">
	                <x-jet-input-error for="descripcion" />
	            </div>

	            <div class="flex flex-col">
	                <label class="w-1/3  font-semibold">Diseño</label>
	                <input type="text" wire:model="diseno" class="w-full h-6  font-semibold rounded" placeholder="Diseño...">
	                <x-jet-input-error for="diseno" />
	            </div>

	            <div class="flex flex-col">
	                <label class="w-1/3  font-semibold">Banda</label>
	                <select name="ciudad" wire:model="banda" class="w-full h-6 py-0  font-semibold rounded" >
	                   <option value=""></option>
	                   <option value="CONTITREAD">CONTITREAD</option>                        
	                  <option value="INDELBAND">INDELBAND</option>                        
	                  <option value="TECNOTREAD">TECNOTREAD</option>
	                </select>
	                <x-jet-input-error for="banda" />
	            </div>

	            <div class="flex flex-col">
	                <div class="flex flex-between">
	                    <label class="w-1/3  font-semibold">Status</label>
	                </div>
	                <select name="ciudad" wire:model="status" class="w-full h-6 py-0  font-semibold rounded" >
	                   <option value=""></option>
	                   <option value="1">ACTIVO</option>                        
	                  <option value="0">INACTIVO</option> 
	                </select>
	                <x-jet-input-error for="status" />
	            </div>

	            <div class="flex flex-col">
	                <div class="flex flex-between"><label class="w-1/3  font-semibold">Precio</label></div>
	                <input type="text" wire:model="precio" class="w-full h-6  font-semibold rounded" placeholder="Precio...">
	                <x-jet-input-error for="precio" />
	            </div>

	            <div class="flex flex-col">
	                <label class="w-1/3  font-semibold">Comentario</label>
	                <input type="text" wire:model="comentario" class="w-full h-6  font-semibold rounded" placeholder="Comentario...">
	                <x-jet-input-error for="comentario" />
	            </div>

	            
	        </div>

        </x-slot>


        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">Cancelar</x-jet-secondary-button>
            <x-jet-danger-button wire:click="save">Crear Producto</x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>

