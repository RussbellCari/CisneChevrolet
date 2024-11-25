<x-modal-card title="Registro de Repuestos" wire:model.defer="isOpen">
    <div class="mx-4">
        <x-input label="Nombre del repuesto" placeholder="Filtro de aire" wire:model="form.nombre" />
        <div class="mt-2">
            <x-input label="Descripción" placeholder="Descripción detallada del repuesto" wire:model="form.descripcion" />
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 mt-2">
            <x-input label="Precio" placeholder="50.00" wire:model="form.precio" prefix="S/." />
            <x-input label="Stock" placeholder="Cantidad disponible" wire:model="form.stock" type="number" />
        </div>
        <div class="mt-2 grid grid-cols-1 sm:grid-cols-2 gap-2">
            <x-input label="Código del repuesto" placeholder="COD123456" wire:model="form.codigo_repuesto" />
            <x-input label="Marca" placeholder="Toyota, Nissan, etc." wire:model="form.marca" />
        </div>
    </div>

    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancelar" x-on:click="close()" />
            <x-button primary label="Registrar" wire:click="store()" />
        </div>
    </x-slot>
</x-modal-card>
