<div class="container mx-auto p-6">

    <!-- Sección de Crear Nueva Reserva -->
    <div class="mb-6 flex justify-between items-center">
        <button wire:click="create" class="px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 shadow-md">
            Crear Nueva Reserva
        </button>
    </div>

    <!-- Sección de Búsqueda -->
    <div class="mb-6">
        <label for="search" class="text-lg font-medium">Buscar Reserva</label>
        <input id="search" type="text" wire:model="search" class="mt-2 border rounded-lg p-3 w-full sm:w-96" placeholder="Buscar por cliente o vehículo">
    </div>

    <!-- Tabla de Reservas -->
    <div class="mb-6 bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Lista de Reservas</h2>
        <table class="table-auto w-full text-left">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Cliente</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Vehículo</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Fecha de Reserva</th>
                    <th class="px-6 py-3 text-sm font-medium text-gray-600">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-sm text-gray-700">
                @foreach($reservas as $reserva)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-6 py-4">{{ $reserva->cliente->nombre }}</td>
                        <td class="px-6 py-4">{{ $reserva->vehiculo->marca }} - {{ $reserva->vehiculo->modelo }}</td>
                        <td class="px-6 py-4">{{ $reserva->fecha_reserva }}</td>
                        <td class="px-6 py-4 flex space-x-2">
                            <button wire:click="edit({{ $reserva->id }})" class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 transition-colors duration-200">
                                Editar
                            </button>
                            <button wire:click="destroy({{ $reserva->id }})" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition-colors duration-200">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Paginación -->
        <div class="mt-4">
            {{ $reservas->links() }}
        </div>
    </div>

    <!-- Modal para Crear o Editar Reserva -->
    @if($isOpen)
        @include('livewire.admin.reserva-create')
    @endif

</div>
