<x-modal-card title="Registro de Mantenimiento" wire:model.defer="isOpen">
    <div class="grid grid-cols-1 gap-2 sm:grid-cols-2 px-3">
        <x-textarea label="Descripción" placeholder="Descripción del mantenimiento" wire:model="form.descripcion" />

        <x-input label="Costo" type="number" step="0.01" placeholder="Ingrese el costo" wire:model="form.costo" />

        <x-native-select label="Vehículo Cliente" wire:model="form.vehiculocliente_id">
            <option>Seleccione un vehículo</option>
            @foreach ($vehiculo_clientes as $vehiculocliente)
                <option value="{{$vehiculocliente->id}}">{{$vehiculocliente->descripcion}}</option>
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

