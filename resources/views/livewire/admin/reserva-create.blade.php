<div class="fixed inset-0 z-50 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg w-full">
        <h3 class="text-xl font-semibold text-center mb-4">{{ $reserva ? 'Editar Reserva' : 'Crear Nueva Reserva' }}</h3>

        <form wire:submit.prevent="store">
            <div class="mb-4">
                <label for="cliente_id" class="block text-sm font-medium text-gray-700">Cliente</label>
                <select id="cliente_id" wire:model="form.cliente_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                    <option value="">Seleccionar Cliente</option>
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
                @error('form.cliente_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="vehiculo_id" class="block text-sm font-medium text-gray-700">Vehículo</label>
                <select id="vehiculo_id" wire:model="form.vehiculo_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                    <option value="">Seleccionar Vehículo</option>
                    @foreach ($vehiculos as $vehiculo)
                        <option value="{{ $vehiculo->id }}">{{ $vehiculo->marca }} - {{ $vehiculo->modelo }}</option>
                    @endforeach
                </select>
                @error('form.vehiculo_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="pago" class="block text-sm font-medium text-gray-700">Monto de Pago</label>
                <input type="number" id="pago" wire:model="form.pago" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" placeholder="Monto de la reserva" step="0.01">
                @error('form.pago') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="fecha_reserva" class="block text-sm font-medium text-gray-700">Fecha de Reserva</label>
                <input type="date" id="fecha_reserva" wire:model="form.fecha_reserva" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                @error('form.fecha_reserva') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                    {{ $reserva ? 'Actualizar Reserva' : 'Crear Reserva' }}
                </button>
                <button type="button" wire:click="$set('isOpen', false)" class="ml-2 px-4 py-2 border-gray-300 text-gray-700 rounded-md hover:bg-gray-200">
                    Cancelar
                </button>
            </div>
        </form>
    </div>
</div>
