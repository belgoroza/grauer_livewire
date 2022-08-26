<x-app-layout>
    

  <div wire:init="loadPosts">
	<x-slot name="header">
 
        <a href="" class="p-1 font-semibold text-white leading-tight bg-gray-800 hover:bg-red-800 rounded">Home</a>
        <a href="" class="p-1 font-semibold text-white leading-tight bg-blue-800 hover:bg-red-800 rounded">Landing</a>

    </x-slot>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    	CATEGORIAS
		<x-table>
			<div class="py-6 mb-2 flex items-center">

				<div class="flex items-center">

					<span>Mosatrando</span>
					
					<select class="form-control ml-2 mr-2" wire:model="cant">
						<option value="10">10</option>
						<option value="25">25</option>
						<option value="50">50</option>
						<option value="100">100</option>
					</select>

					<span>entradas</span>

				</div>

				<x-jet-input wire:model="search" type="text" class="flex-1 ml-4 mr-4 pr-4 h-10" placeholder="Digite la busqueda"/>
				
			</div>	
    		
    		

		    <table class="min-w-full divide-y divide-gray-200">
		        <thead class="bg-gray-50">
		            <tr>
		              <th scope="col" class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" wire:click="order('id')">
		              	Id
		              	
		              </th>
		              <th scope="col" class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" wire:click="order('title')">
		              	Título
		              	
		              	
		              </th>
		              <th scope="col" class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" wire:click="order('excerpt')">
		              	Contenido
		              	
		              </th>		              
		              <th scope="col" class="relative px-6 py-3"><span class="sr-only">Edit</span></th>
		            </tr>
		        </thead>		         
		        <tbody class="bg-white divide-y divide-gray-200">
		        	
		        </tbody>
		    </table>

			   

		   

		</x-table>     





    </div>




    @push('js')

    <script src="sweetalert2.all.min.js"></script>

    	<script>


    		Livewire.on('deletePost', postId => {

    			Swal.fire(
    			{
					title: 'Está seguro?',
					text: "No podrá revertir esto!",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Si, eliminar!!'
				}).then((result) => 
				{
				  	if (result.isConfirmed) 
				  	{
				    	Livewire.emitTo('show-post','delete', postId );

				    	Swal.fire(
				      		'Borrado!',
				      		'El registro ha sido eliminado.',
				      		'success'
				    	)
				  	}
				})

    		})





    		
    	</script>

    @endpush


</div>

</x-app-layout>