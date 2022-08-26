<x-guest-layout>	
	<div class="container mx-auto">
		<div class="flex justify-between px-2 pt-4 m-2 border-b font-semibold text-yellow-800">
			<span class="text-left">Categoría: {{ucwords($seccion)}}</span>
			<a href="{{url('/')}}" class="text-white font-semibold bg-yellow-600 px-2 rounded hover:bg-gray-600 ">Home</a>
		</div>
		<div class="grid grid-cols-3 lg:grid-cols-6 gap-4 p-4 items-center">
			<div class="flex justify-center items-center text-sm rounded border border-gray-300 shadow w-18 h-24 hover:bg-yellow-600 active:bg-gray-700 hover:text-white cursor-pointer">
				Servicio
			</div>
			<div class="flex justify-center items-center text-sm rounded border border-gray-300 shadow w-18 h-24 hover:bg-yellow-600 active:bg-gray-700 hover:text-white cursor-pointer">
				Liquidación
			</div>
			<div class="flex justify-center items-center text-sm rounded border border-gray-300 shadow w-18 h-24 hover:bg-yellow-600 active:bg-gray-700 hover:text-white cursor-pointer">
				Blanca
			</div>
			<div class="flex justify-center items-center text-sm rounded border border-gray-300 shadow w-18 h-24 hover:bg-yellow-600 active:bg-gray-700 hover:text-white cursor-pointer">
				Catálogo
			</div>
			<div class="flex justify-center items-center text-sm rounded border border-gray-300 shadow w-18 h-24 hover:bg-yellow-600 active:bg-gray-700 hover:text-white cursor-pointer">
				Reporte
			</div>
			<div class="flex justify-center items-center text-sm rounded border border-gray-300 shadow w-18 h-24 hover:bg-yellow-600 active:bg-gray-700 hover:text-white cursor-pointer">
				Precios
			</div>
			<div class="flex justify-center items-center text-sm rounded border border-gray-300 shadow w-18 h-24 hover:bg-yellow-600 active:bg-gray-700 hover:text-white cursor-pointer">
				Catálogo1
			</div>
			<div class="flex justify-center items-center text-sm rounded border border-gray-300 shadow w-18 h-24 hover:bg-yellow-600 active:bg-gray-700 hover:text-white cursor-pointer">
				Catálogo2
			</div>
			<div class="flex justify-center items-center text-sm rounded border border-gray-300 shadow w-18 h-24 hover:bg-yellow-600 active:bg-gray-700 hover:text-white cursor-pointer">
				Catálogo3
			</div>
		</div>
	</div>

</x-guest-layout>