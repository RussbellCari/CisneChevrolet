<div class="container mx-auto p-6">
    <h3 class="text-center text-2xl font-semibold mb-6">Consulta de Disponibilidad</h3>

    <!-- Información de vehículos -->
    <div class="mb-6">
        <h4 class="text-xl font-medium mb-4">Vehículos Registrados</h4>
        <div class="space-y-4">
            @foreach($vehiculos as $vehiculo)
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <p><strong>Placa:</strong> {{ $vehiculo->placa }}</p>
                    <p><strong>Cliente:</strong> {{ $vehiculo->cliente->nombre }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Fechas y Horas en formato de calendario -->
    <div class="mb-6">
        <h4 class="text-xl font-medium mb-4">Calendario de Disponibilidad</h4>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($disponibilidad as $dispo)
                <div class="flex justify-center">
                    <button
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none"
                        wire:click="seleccionarFechaYHora('{{ $dispo->fecha }}', '{{ $dispo->hora }}', '{{ $dispo->id }}')">
                        <p><strong>{{ $dispo->fecha }}</strong></p>
                        <p>{{ $dispo->hora }}</p>
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
