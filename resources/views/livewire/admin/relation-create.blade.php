<x-modal name="modalRelation">
    <x-card title="Relacionamiento">
        <div class="grid grid-cols-1 gap-4">
            <x-input label="¿Cuantos participacron de grupos pequeños en la semana?" placeholder="Nro. de participantes en grupos pequeño" wire:model="form.firstname" />
            <x-input label="¿Cuantos trajeron alguen nuevo este sabado?" placeholder="Nro. de miembros nuevos" wire:model="form.firstname" />
        </div>
        <x-slot name="footer" class="flex justify-end gap-x-4">
            <x-button flat label="Cancelar" x-on:click="close()" />
            <x-button primary label="Registrar" wire:click="store_relation()" />
        </x-slot>
    </x-card>
</x-modal>
