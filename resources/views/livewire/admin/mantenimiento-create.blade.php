<div class="container mx-auto p-6 max-w-2xl">

    <h3 class="text-center text-2xl font-semibold mb-6">Registrar Mantenimiento</h3>

    <!-- Formulario -->
    <form wire:submit.prevent="submit" class="bg-white shadow-lg rounded-lg p-6">

        <!-- Vehículo Cliente -->
        <div class="mb-4">
            <label for="vehiculo_cliente_id" class="block text-lg font-medium text-gray-700 mb-2">Seleccionar Vehículo</label>
            <select wire:model="vehiculo_cliente_id" id="vehiculo_cliente_id" class="block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Seleccione un vehículo</option>
                @foreach($vehiculos as $vehiculo)
                    <option value="{{ $vehiculo->id }}">
                        {{ $vehiculo->placa }} ({{ $vehiculo->cliente->nombre }})
                    </option>
                @endforeach
            </select>
            @error('vehiculo_cliente_id')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Descripción -->
        <div class="mb-4">
            <label for="descripcion" class="block text-lg font-medium text-gray-700 mb-2">Descripción</label>
            <textarea wire:model="descripcion" id="descripcion" class="block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4" placeholder="Escribe una descripción detallada del mantenimiento"></textarea>
            @error('descripcion')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Costo -->
        <div class="mb-4">
            <label for="costo" class="block text-lg font-medium text-gray-700 mb-2">Costo Aproximado</label>
            <input wire:model="costo" id="costo" type="number" class="block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" step="0.01" placeholder="Ingrese el costo aproximado">
            @error('costo')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Fecha y Hora -->
        <div class="mb-4">
            <label for="disponibilidad_atencion_id" class="block text-lg font-medium text-gray-700 mb-2">Fecha y Hora de Mantenimiento</label>
            <select wire:model="disponibilidad_atencion_id" id="disponibilidad_atencion_id" class="block w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Selecciona una fecha y hora</option>
                @foreach($disponibilidades as $disponibilidad)
                    <option value="{{ $disponibilidad->id }}">
                        {{ $disponibilidad->fecha }} - {{ $disponibilidad->hora }}
                    </option>
                @endforeach
            </select>
            @error('disponibilidad_atencion_id')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Botón Guardar -->
        <div class="mb-4">
            <button type="submit" class="w-full py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Guardar Mantenimiento
            </button>
        </div>

    </form>

    <!-- Mensaje de éxito -->
    @if (session()->has('message'))
        <div class="mt-4 p-4 bg-green-100 border border-green-300 text-green-700 rounded-md">
            {{ session('message') }}
        </div>
    @endif

</div>
