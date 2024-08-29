<x-modal name="modalMission">
    <x-card title="Misión">
        <div class="grid grid-cols-1 gap-4">
            <x-input label="¿Cuantos dieron estudios biblicos durante la semana?" placeholder="Nro. de estudios biblicos" wire:model="form.firstname" />
            <x-input label="¿Cuantos realizaron visitas misioneras en la semana?" placeholder="Nro. de visitas misioneras" wire:model="form.firstname" />
            <x-input label="¿Cuantos entregaron publicaciones durante la semana?" placeholder="Nro. de publicaciones entregadas" wire:model="form.firstname" />
        </div>
        <x-slot name="footer" class="flex justify-end gap-x-4">
            <x-button flat label="Cancelar" x-on:click="close()" />
            <x-button primary label="Registrar" wire:click="store_mission()" />
        </x-slot>
    </x-card>
</x-modal>
