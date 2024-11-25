<x-modal-card title="Registro de Vehículos" wire:model.defer="isOpen">
    <div class="mx-4">
        <x-input label="Marca" placeholder="Toyota, Nissan, etc." wire:model="form.marca" />
        <div class="mt-2">
            <x-input label="Modelo" placeholder="Corolla, Pathfinder, etc." wire:model="form.modelo" />
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 mt-2">
            <x-input label="Año" placeholder="2024" wire:model="form.anio" type="number" />
            <x-input label="Color" placeholder="Rojo, Azul, etc." wire:model="form.color" />
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 mt-2">
            <x-input label="Tipo de Vehículo" placeholder="Sedán, SUV, Camión, etc." wire:model="form.tipo" />
            <x-input label="Número de Motor" placeholder="Opcional" wire:model="form.numero_motor" />
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 mt-2">
            <x-input label="Kilometraje" placeholder="0" wire:model="form.kilometraje" type="number" />
            <x-input label="Stock" placeholder="Cantidad disponible" wire:model="form.stock" type="number" />
        </div>
        <div class="mt-2">
            <x-datetime-picker label="Fecha de Registro" placeholder="Selecciona una fecha" wire:model="form.fecha_registro" without-time="true" />
        </div>
    </div>

    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancelar" x-on:click="close()" />
            <x-button primary label="Registrar" wire:click="store()" />
        </div>
    </x-slot>
</x-modal-card>
