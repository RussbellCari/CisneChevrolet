<x-modal-card title="Registro de Usuario" wire:model.defer="isOpen">
    <div class="grid grid-cols-1 gap-2 sm:grid-cols-2 px-3">
        <x-input label="Nombres y apellios" placeholder="First Name" wire:model="form.name" />
        <x-input label="Email" placeholder="Correo" wire:model="form.email" />

        <x-native-select label="Rol" wire:model="form.rol_name">
            <option>Seleccione opción</option>
            @foreach ($roles as $rol)
                <option value="{{$rol->name}}">{{$rol->name}}</option>
            @endforeach
        </x-native-select>
    </div>

    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancelar" x-on:click="close()" />
            <x-button primary label="Registrar" wire:click="store()" />
        </div>
    </x-slot>
</x-modal-card>
