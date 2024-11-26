<div>
    <form wire:submit.prevent="submit">
        <!-- Vehículo Cliente -->
        <div class="mb-4">
            <label for="vehiculo_cliente_id" class="form-label">Seleccionar Vehículo</label>
            <select wire:model="vehiculo_cliente_id" id="vehiculo_cliente_id" class="form-control">
                <option value="">Seleccione un vehículo</option>
                @foreach($vehiculos as $vehiculo)
                    <option value="{{ $vehiculo->id }}">
                        {{ $vehiculo->placa }} ({{ $vehiculo->cliente->nombre }})
                    </option>
                @endforeach
            </select>
            @error('vehiculo_cliente_id') <span class="error">{{ $message }}</span> @enderror
        </div>

        <!-- Descripción -->
        <div class="mb-4">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea wire:model="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
            @error('descripcion') <span class="error">{{ $message }}</span> @enderror
        </div>

        <!-- Costo -->
        <div class="mb-4">
            <label for="costo" class="form-label">Costo Aproximado</label>
            <input wire:model="costo" id="costo" type="number" class="form-control" step="0.01">
            @error('costo') <span class="error">{{ $message }}</span> @enderror
        </div>

        <!-- Fecha y Hora -->
        <div class="mb-4">
            <label for="disponibilidad_atencion_id" class="form-label">Fecha y Hora de Mantenimiento</label>
            <select wire:model="disponibilidad_atencion_id" id="disponibilidad_atencion_id" class="form-control">
                <option value="">Selecciona una fecha y hora</option>
                @foreach($disponibilidades as $disponibilidad)
                    <option value="{{ $disponibilidad->id }}">
                        {{ $disponibilidad->fecha }} - {{ $disponibilidad->hora }}
                    </option>
                @endforeach
            </select>
            @error('disponibilidad_atencion_id') <span class="error">{{ $message }}</span> @enderror
        </div>

        <!-- Botón Guardar -->
        <div class="mb-4">
            <button type="submit" class="btn btn-primary">Guardar Mantenimiento</button>
        </div>
    </form>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>
