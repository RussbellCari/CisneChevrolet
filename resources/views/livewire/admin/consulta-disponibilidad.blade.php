<div class="container mx-auto p-6">

    <!-- Título principal -->
    <h3 class="text-center text-2xl font-semibold mb-6">Consulta de Disponibilidad</h3>

    <!-- Información de vehículos en tabla -->
    <div class="mb-6">
        <h4 class="text-xl font-medium mb-4">Vehículos Registrados</h4>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <table class="table-auto w-full text-left">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-sm font-medium text-gray-600">Placa</th>
                        <th class="px-6 py-3 text-sm font-medium text-gray-600">Cliente</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-700">
                    @foreach($vehiculos as $vehiculo)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-6 py-4">{{ $vehiculo->placa }}</td>
                            <td class="px-6 py-4">{{ $vehiculo->cliente->nombre }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="mb-6">
        <h4 class="text-2xl font-bold mb-6 text-center text-gray-700">Calendario de Disponibilidad</h4>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($disponibilidad as $dispo)
                <div class="flex justify-center">
                    <button
                        class="bg-gradient-to-r from-blue-500 to-blue-600 text-white px-8 py-4 rounded-lg shadow-lg transform transition-transform hover:scale-105 hover:from-blue-600 hover:to-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none"
                        wire:click="seleccionarFechaYHora('{{ $dispo->fecha }}', '{{ $dispo->hora }}', '{{ $dispo->id }}')">
                        <div class="text-center">
                            <p class="text-xl font-bold mb-1">{{ \Carbon\Carbon::parse($dispo->fecha)->format('d/m/Y') }}</p>
                            <p class="text-lg font-medium">{{ $dispo->hora }}</p>
                        </div>
                    </button>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Mensaje de error -->
    <div>
        @if ($errorMessage)
            <p class="text-red-500 text-center text-lg">{{ $errorMessage }}</p>
        @endif
    </div>

    <!-- Resumen de selección -->
    <div>
        @if($selectedDate && $selectedTime && !$errorMessage)
            <div class="bg-green-100 p-4 rounded-md text-center">
                <p class="text-green-700"><strong>Fecha Seleccionada:</strong> {{ $selectedDate }}</p>
                <p class="text-green-700"><strong>Hora Seleccionada:</strong> {{ $selectedTime }}</p>
                <a href="{{ route('registro-mantenimiento', ['selectedDate' => $selectedDate, 'selectedTime' => $selectedTime]) }}"
                   class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-700">
                    Registrar Mantenimiento
                </a>
            </div>
        @endif
    </div>

</div>
