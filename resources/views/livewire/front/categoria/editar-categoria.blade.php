<div>

	<a class="font-bold text-black p-1 rounded cursor-pointer bg-red-300 hover:text-white hover:bg-red-600 " wire:click="$set('open',true)"><i class="fas fa-edit"></i></a>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">
            Editar Categoría {{ $categoria->id}}
        </x-slot>


        <x-slot name="content">
            
            <div class="mb-4 grid grid-cols-1 md:grid-cols-2 gap-4">

                <div>
                    <x-jet-label value="Sección"/>                    
                    <select wire:model="categoria.section_id" class="w-full h-10 text-sm font-bold py-0 rounded" >
                      <option value=""></option>
                        @if($secciones)
                            @foreach ($secciones as $seccion)
                              <option value="{{$seccion->id}}">{{ ucwords($seccion->name) }}</option>
                            @endforeach
                        @else
                            no data
                        @endif
                    </select>
                    <x-jet-input-error for="categoria.section_id" />
                </div>

                <div>
                    <x-jet-label value="Categoria Padre"/>
                    <x-jet-input type="text" class="w-full" wire:model="categoria.parent_id" />
                    <x-jet-input-error for="categoria.parent_id" />
                </div>

                <div>
                    <x-jet-label value="Nombre de la Categoría"/>
                    <x-jet-input type="text" class="w-full" wire:model="categoria.category_name" />
                    <x-jet-input-error for="categoria.category_name" />
                </div>

                <div class="grid row-span-2">
                    <x-jet-label value="Imagen de la Categoría"/>
                    <x-jet-input type="text" class="w-full" wire:model="categoria.category_image" />
                    <x-jet-input-error for="categoria.category_image" />
                </div>

                <div>
                    <x-jet-label value="Descuento"/>
                    <x-jet-input type="text" class="w-full" wire:model="categoria.category_discount" />
                    <x-jet-input-error for="categoria.category_discount" />
                </div>

                <div class="col-span-2">
                    <x-jet-label value="Descripción"/>
                    <x-jet-input type="text" class="w-full" wire:model="categoria.description" />
                    <x-jet-input-error for="categoria.description" />
                </div>


                <div>
                    <x-jet-label value="Url"/>
                    <x-jet-input type="text" class="w-full" wire:model="categoria.url" />
                    <x-jet-input-error for="categoria.url" />
                </div>

                <div>
                    <x-jet-label value="Status"/>                    
                    <select wire:model="categoria.status" class="w-full h-10 text-sm font-bold py-0 rounded" >
                       <option value=""></option>
                       <option value="1">ACTIVO</option>
                       <option value="2">INACTIVO</option>
                    </select>
                    <x-jet-input-error for="categoria.status" />
                </div>


                <div>
                    <x-jet-label value="Meta Título"/>
                    <x-jet-input type="text" class="w-full" wire:model="categoria.meta_title" />
                    <x-jet-input-error for="categoria.meta_title" />
                </div>

                <div>
                    <x-jet-label value="Meta Descripción"/>
                    <x-jet-input type="text" class="w-full" wire:model="categoria.meta_description" />
                    <x-jet-input-error for="categoria.meta_description" />
                </div>

                <div class="col-span-2">
                    <x-jet-label value="Meta KeyWords"/>
                    <x-jet-input type="text" class="w-full" wire:model="categoria.meta_keywords" />
                    <x-jet-input-error for="categoria.meta_keywords" />
                </div>


            </div>

            <!-- fin del grid -->

            

        </x-slot>


        <x-slot name="footer">

            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>


            <x-jet-danger-button wire:click="save">
                Crear Categoría
            </x-jet-danger-button>


        </x-slot>




    </x-jet-dialog-modal>



</div>
