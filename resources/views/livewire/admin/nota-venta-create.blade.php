<x-modal-card title="Registro de Nota de Venta" wire:model.defer="isOpen">
    <div class="grid grid-cols-1 gap-2 sm:grid-cols-2 px-3">

        <!-- Cliente -->
        <x-native-select label="Cliente" wire:model="form.cliente_id">
            <option value="">Seleccione un cliente</option>
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
            @endforeach
        </x-native-select>

        <!-- Vehículo -->
        <x-native-select label="Vehículo" wire:model="form.vehiculo_id">
            <option value="">Seleccione un vehículo</option>
            @foreach ($vehiculos as $vehiculo)
                <option value="{{ $vehiculo->id }}">{{ $vehiculo->modelo }}</option>
            @endforeach
        </x-native-select>

        <!-- Vehículo del Cliente -->
        <x-native-select label="Vehículo del Cliente" wire:model="form.vehiculocliente_id">
            <option value="">Seleccione un vehículo del cliente</option>
            @foreach ($vehiculo_clientes as $vehiculocliente)
                <option value="{{ $vehiculocliente->id }}">{{ $vehiculocliente->marca }}</option>
            @endforeach
        </x-native-select>

        <!-- Repuesto -->
        <x-native-select label="Repuesto" wire:model="form.repuesto_id">
            <option value="">Seleccione un repuesto</option>
            @foreach ($repuestos as $repuesto)
                <option value="{{ $repuesto->id }}">{{ $repuesto->nombre }}</option>
            @endforeach
        </x-native-select>

        <!-- Mantenimiento -->
        <x-native-select label="Mantenimiento" wire:model="form.mantenimiento_id">
            <option value="">Seleccione un mantenimiento</option>
            @foreach ($mantenimientos as $mantenimiento)
                <option value="{{ $mantenimiento->id }}">{{ $mantenimiento->descripcion }}</option>
            @endforeach
        </x-native-select>

        <x-native-select label="Reserva" wire:model="form.reserva_id">
            <option value="">Seleccione un repuesto</option>
            @foreach ($reservas as $reserva)
                <option value="{{ $reserva->id }}">{{ $reserva->id }}</option>
            @endforeach
        </x-native-select>

        <!-- Información adicional de la Nota de Venta -->
        <x-input label="Nombre" placeholder="Descripción de la nota de venta" wire:model="form.nombre" />
        <x-input type="date" label="Fecha de emisión" wire:model="form.fecha_emision" />
        <x-input label="Subtotal" placeholder="0.00" wire:model="form.subtotal" prefix="S/." />
        <x-input label="Pago" placeholder="0.00" wire:model="form.pago" prefix="S/." />

    </div>

    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancelar" x-on:click="close()" class="bg-gray-700 text-white hover:bg-gray-600" />
            <x-button primary label="Registrar" wire:click="store()" class="bg-gray-700 text-white hover:bg-gray-600" />
        </div>
    </x-slot>
</x-modal-card>
