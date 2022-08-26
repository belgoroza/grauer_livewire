<div>

    <x-jet-danger-button wire:click="$set('open',true)">
        Crear Nueva Categoría
    </x-jet-danger-button>


    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">
            Crear Una Nueva Categoría
        </x-slot>


        <x-slot name="content">
            
            <div class="mb-4 grid grid-cols-1 md:grid-cols-2 gap-4">

                <div>
                    <x-jet-label value="Sección"/>
                    
                    <select wire:model="seccion" class="w-full h-10 text-sm font-bold py-0 rounded" >
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

                <div>
                    <x-jet-label value="Categoria Padre"/>
                    <x-jet-input type="text" class="w-full" wire:model="categoriaPadre" />
                    <x-jet-input-error for="categoriaPadre" />
                </div>

                <div>
                    <x-jet-label value="Nombre de la Categoría"/>
                    <x-jet-input type="text" class="w-full" wire:model="nombreCategoria" />
                    <x-jet-input-error for="nombreCategoria" />
                </div>

                <div class="grid row-span-2">
                    <x-jet-label value="Imagen de la Categoría"/>
                    <x-jet-input type="text" class="w-full" wire:model="imagenCategoria" />
                    <x-jet-input-error for="imagenCategoria" />
                </div>

                <div>
                    <x-jet-label value="Descuento"/>
                    <x-jet-input type="text" class="w-full" wire:model="descuento" />
                    <x-jet-input-error for="descuento" />
                </div>

                <div class="col-span-2">
                    <x-jet-label value="Descripción"/>
                    <x-jet-input type="text" class="w-full" wire:model="descripcion" />
                    <x-jet-input-error for="descripcion" />
                </div>


                <div>
                    <x-jet-label value="Url"/>
                    <x-jet-input type="text" class="w-full" wire:model="url" />
                    <x-jet-input-error for="url" />
                </div>

                <div>
                    <x-jet-label value="Status"/>                    
                    <select wire:model="status" class="w-full h-10 text-sm font-bold py-0 rounded" >
                       <option value=""></option>
                       <option value="1">ACTIVO</option>
                       <option value="2">INACTIVO</option>                                                
                    </select>
                    <x-jet-input-error for="status" />
                </div>


                <div>
                    <x-jet-label value="Meta Título"/>
                    <x-jet-input type="text" class="w-full" wire:model="metaTitulo" />
                    <x-jet-input-error for="metaTitulo" />
                </div>

                <div>
                    <x-jet-label value="Meta Descripción"/>
                    <x-jet-input type="text" class="w-full" wire:model="metaDesc" />
                    <x-jet-input-error for="metaDesc" />
                </div>

                <div class="col-span-2">
                    <x-jet-label value="Meta KeyWords"/>
                    <x-jet-input type="text" class="w-full" wire:model="metaKeywords" />
                    <x-jet-input-error for="metaKeywords" />
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
