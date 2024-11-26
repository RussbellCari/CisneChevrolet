<div class="py-2">
    <div class="mx-6 mb-4">
        <h2 class="text-3xl font-bold text-gray-700">Notas de Venta</h2> <!-- Cambié el color a gris oscuro -->
        <div class="border-b-2 border-gray-600 w-44"></div> <!-- Cambié el color a gris oscuro -->
    </div>
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-gray-800/50 dark:bg-gradient-to-bl">
            <div class="flex items-center justify-between gap-1">
                <div class="w-full flex gap-2">
                    <!-- Input de búsqueda -->
                    <div class="mb-2 w-2/4">
                        <input wire:model.live="search" type="text" class="form-input" placeholder="Buscar nota de venta" />
                    </div>

                    <!-- Filtros -->
                    <div class="mb-2 w-1/4 text-gray-500"> <!-- Cambié el color a gris -->
                        <x-native-select
                            :options="[['name'=>'Activas','id'=>1],['name'=>'Inactivas','id'=>0]]"
                            option-label="name" option-value="id"
                            wire:model.live="active"
                        />
                    </div>
                    <div class="mb-2" wire:loading>
                        <svg aria-hidden="true" class="w-8 h-8 text-gray-400 animate-spin dark:text-gray-600 fill-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                        </svg>
                    </div>
                </div>
                <!-- Botón nuevo -->
                <div class="mb-1 ml-10">
                    <x-button primary label="Nuevo" icon="plus" wire:click="create()"></x-button>
                    @if($isOpen)
                        @include('livewire.admin.nota-venta-create') <!-- Include del formulario de creación -->
                    @endif
                </div>
            </div>
            <!-- Tabla lista de Notas de Venta -->
            <div class="shadow overflow-x-auto border-b border-gray-200 sm:rounded-lg">
                <table class="w-full table-auto">
                    <thead class="bg-gray-600 text-gray-200 border-b border-black">
                        <tr class="text-left text-xs font-bold uppercase">
                            <td scope="col" class="px-6 py-3">ID</td>
                            <td scope="col" class="px-6 py-3">Cliente</td>
                            <td scope="col" class="px-6 py-3">Vehículo</td>
                            <td scope="col" class="px-6 py-3">Vehículo Cliente</td>
                            <td scope="col" class="px-6 py-3">Reserva</td>
                            <td scope="col" class="px-6 py-3">Repuesto</td>
                            <td scope="col" class="px-6 py-3">Mantenimiento</td>
                            <td scope="col" class="px-6 py-3">Nombre</td>
                            <td scope="col" class="px-6 py-3">Fecha de emisión</td>
                            <td scope="col" class="px-6 py-3">Pago</td>
                            <td scope="col" class="px-6 py-3 text-center">Opciones</td>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($notasVenta as $notaVenta)
                        <tr class="text-sm font-medium text-gray-900 even:bg-gray-100 odd:bg-white hover:bg-gray-300">
                            <td class="px-6 py-4">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-600 text-white">
                                    {{$notaVenta->id}}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-xs">{{ optional($notaVenta->cliente)->nombre ?? 'No disponible' }}</td>
                            <td class="px-6 py-4 text-xs">{{ optional($notaVenta->vehiculo)->marca ?? 'No disponible' }}</td>
                            <td class="px-6 py-4 text-xs">{{ optional($notaVenta->vehiculocliente)->placa ?? 'No disponible' }}</td>
                            <td class="px-6 py-4 text-xs">{{ optional($notaVenta->reserva)->id ?? 'No disponible' }}</td>
                            <td class="px-6 py-4 text-xs">{{ optional($notaVenta->repuesto)->nombre ?? 'No disponible' }}</td>
                            <td class="px-6 py-4 text-xs">{{ optional($notaVenta->mantenimiento)->descripcion ?? 'No disponible' }}</td>
                            <td class="px-6 py-4 text-xs">{{$notaVenta->nombre}}</td>
                            <td class="px-6 py-4 text-xs">{{$notaVenta->fecha_emision}}</td>
                            <td class="px-6 py-4 text-xs">{{$notaVenta->subtotal}}</td>
                            <td class="px-6 py-4 text-xs">{{$notaVenta->pago}}</td>
                            <td class="px-6 py-4 flex gap-1 justify-end">
                                <x-mini-button rounded primary icon="pencil" wire:click="edit({{ $notaVenta->id }})"/>
                                <x-mini-button rounded negative icon="x-mark" wire:click="destroy({{ $notaVenta->id }})"/>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-2">
                    @if(!$notasVenta->count())
                    <x-alert title="No existen registros" info />
                    @endif
                </div>
            </div>
            <div class="px-6 py-3">
                {{$notasVenta->links()}}
            </div>
        </div>
    </div>
</div>
