<div class="container mx-auto p-6">
    <h2 class="text-3xl font-bold text-center mb-6">Mantenimientos Programados</h2>

    <!-- Tabla de mantenimientos -->
    <div class="overflow-x-auto bg-white rounded-lg shadow-md">
        <table class="table-auto w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">#</th>
                    <th class="px-4 py-2 text-left">Cliente</th>
                    <th class="px-4 py-2 text-left">Vehículo</th>
                    <th class="px-4 py-2 text-left">Placa</th>
                    <th class="px-4 py-2 text-left">Fecha</th>
                    <th class="px-4 py-2 text-left">Hora</th>
                    <th class="px-4 py-2 text-left">Descripción</th>
                    <th class="px-4 py-2 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($mantenimientos as $mantenimiento)
                    <tr>
                        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border px-4 py-2">{{ $mantenimiento->vehiculoCliente->cliente->nombre }}</td>
                        <td class="border px-4 py-2">{{ $mantenimiento->vehiculoCliente->vehiculo->marca }} {{ $mantenimiento->vehiculoCliente->vehiculo->modelo }}</td>
                        <td class="border px-4 py-2">{{ $mantenimiento->vehiculoCliente->placa }}</td>
                        <td class="border px-4 py-2">{{ $mantenimiento->disponibilidadAtencion->fecha }}</td>
                        <td class="border px-4 py-2">{{ $mantenimiento->disponibilidadAtencion->hora }}</td>
                        <td class="border px-4 py-2">{{ $mantenimiento->descripcion }}</td>
                        <td class="border px-4 py-2 text-center">
                            <button
                                wire:click="editarMantenimiento({{ $mantenimiento->id }})"
                                class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-700 focus:outline-none">
                                Editar
                            </button>
                            <button
                                wire:click="eliminarMantenimiento({{ $mantenimiento->id }})"
                                class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-700 focus:outline-none">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="border px-4 py-2 text-center text-gray-500">
                            No hay mantenimientos programados.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Botón agregar mantenimiento -->
    <div class="mt-6 text-center">
        <button
            wire:click="agregarMantenimiento"
            class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-700 focus:outline-none">
            Agregar Mantenimiento
        </button>
    </div>
</div>
