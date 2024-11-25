<x-modal-card title="Registro de Clientes" wire:model.defer="isOpen">
    <div class="mx-4">
        <x-input label="Nombre" placeholder="Nombre del cliente" wire:model="form.nombre" />
        <div class="mt-2">
            <x-input label="Apellido" placeholder="Apellido del cliente" wire:model="form.apellido" />
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 mt-2">
            <x-input label="Correo Electrónico" placeholder="correo@ejemplo.com" wire:model="form.correo" type="email" />
            <x-input label="Teléfono" placeholder="Opcional" wire:model="form.telefono" type="tel" />
        </div>
        <div class="mt-2">
            <x-input label="Dirección" placeholder="Calle, número, ciudad" wire:model="form.direccion" />
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 mt-2">
            <x-datetime-picker label="Fecha de Nacimiento" placeholder="Selecciona una fecha" wire:model="form.fecha_nacimiento" without-time="true" />
            <x-select label="Tipo de Cliente" placeholder="Selecciona" wire:model="form.tipo_cliente">
                <x-select.option label="Individual" value="individual" />
                <x-select.option label="Empresa" value="empresa" />
            </x-select>
        </div>
        <div class="mt-2">
            <x-input label="Número de Identificación" placeholder="DNI, cédula, etc." wire:model="form.identificacion" />
        </div>
    </div>

    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancelar" x-on:click="close()" />
            <x-button primary label="Registrar" wire:click="store()" />
        </div>
    </x-slot>
</x-modal-card>
