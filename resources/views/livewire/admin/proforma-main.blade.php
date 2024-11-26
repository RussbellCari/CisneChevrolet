<div class="container mx-auto p-6">

    <!-- Encabezado -->
    <div class="mb-6">
        <h2 class="text-3xl font-bold text-gray-900">Proformas</h2>
        <div class="border-b-2 border-gray-600 w-44"></div>
    </div>

    <!-- Sección de Crear Nueva Proforma -->
    <div class="mb-6 flex justify-between items-center">
        <button wire:click="create" class="px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 shadow-md">
            Nueva Proforma
        </button>
    </div>

    <div class="mb-2 w-2/4">
        <x-input wire:model.live="search" icon="user" placeholder="Buscar proforma" />
    </div>

    <!-- Tabla de Proformas -->
    <div class="mb-6 bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Lista de Proformas</h2>
        <table class="table-auto w-full text-left">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">ID</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Cliente</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Vehículo</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Vehículo Cliente</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Repuesto</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Mantenimiento</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Nombre</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Fecha de Emisión</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Subtotal</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Impuestos</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Total</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600 text-center">Opciones</th>
                </tr>
            </thead>
            <tbody class="text-sm text-gray-700">
                @foreach($proformas as $item)
                <tr class="border-b hover:bg-gray-100">
                    <td class="px-6 py-4 font-semibold">
                        <span class="px-3 py-1 text-xs font-bold rounded-full bg-gray-500 text-white">
                            {{$item->id}}
                        </span>
                    </td>
                    <td class="px-6 py-4">{{ optional($item->cliente)->nombre ?? 'No disponible' }}</td>
                    <td class="px-6 py-4">{{ optional($item->vehiculo)->marca ?? 'No disponible' }}</td>
                    <td class="px-6 py-4">{{ optional($item->vehiculocliente)->placa ?? 'No disponible' }}</td>
                    <td class="px-6 py-4">{{ optional($item->repuesto)->nombre ?? 'No disponible' }}</td>
                    <td class="px-6 py-4">{{ optional($item->mantenimiento)->descripcion ?? 'No disponible' }}</td>
                    <td class="px-6 py-4">{{$item->nombre}}</td>
                    <td class="px-6 py-4">{{$item->fecha_de_emision}}</td>
                    <td class="px-6 py-4">{{$item->subtotal}}</td>
                    <td class="px-6 py-4">{{$item->impuestos}}</td>
                    <td class="px-6 py-4">{{$item->total}}</td>
                    <td class="px-6 py-4 flex space-x-2 justify-end">
                        <x-mini-button class="bg-yellow-500 hover:bg-yellow-600 text-white" rounded icon="pencil" wire:click="edit({{$item}})" />
                        @if ($active==1)
                        <x-mini-button class="bg-red-500 hover:bg-red-600 text-white" rounded icon="x-mark" wire:click="confirmSimple({{$item}})" />
                        @else
                        <x-mini-button class="bg-gray-500 hover:bg-gray-600 text-white" rounded icon="exclamation-triangle" wire:click="renovate({{$item}})" />
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Mensaje de Sin Registros -->
        @if(!$proformas->count())
        <div class="mt-4">
            <x-alert title="* No existe ningún registro coincidente" info />
        </div>
        @endif

        <!-- Paginación -->
        <div class="mt-4">
            {{$proformas->links()}}
        </div>
    </div>

    <!-- Modal para Crear o Editar Proforma -->
    @if($isOpen)
    @include('livewire.admin.proforma-create')
    @endif

</div>
