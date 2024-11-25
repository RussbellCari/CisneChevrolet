<div class="py-2">
    <div class="mx-6 mb-4">
        <h2 class="text-3xl font-bold text-gray-900">Proformas</h2>
        <div class="border-b-2 border-gray-600 w-44"></div>
    </div>
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-gradient-to-tr from-gray-100 via-gray-200 to-gray-300 overflow-hidden shadow-xl sm:rounded-lg px-6 py-4">
            <div class="flex items-center justify-between gap-2">
                <div class="w-full flex gap-2">
                    <!-- Input de búsqueda -->
                    <div class="mb-2 w-2/4">
                        <x-input wire:model.live="search" icon="user" placeholder="Buscar proforma" />
                    </div>
                    <!-- Filtros -->
                    <div class="mb-2 w-1/4">
                        <x-native-select
                            :options="[['name'=>'Activos','id'=>1],['name'=>'Inactivos','id'=>0]]"
                            option-label="name"
                            option-value="id"
                            wire:model.live="active"
                        />
                    </div>
                    <div class="mb-2" wire:loading>
                        <svg aria-hidden="true" class="w-8 h-8 text-gray-300 animate-spin fill-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 101" fill="none">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908Z" fill="currentColor" />
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539..." fill="currentFill" />
                        </svg>
                    </div>
                </div>
                <!-- Botón Nuevo -->
                <div class="mb-1">
                    <x-button class="bg-gray-600 hover:bg-gray-700 text-white" label="Nuevo" icon="plus" wire:click="create()" />
                    @if($isOpen)
                        @include('livewire.admin.proforma-create')
                    @endif
                </div>
            </div>
            <!-- Tabla -->
            <div class="shadow overflow-x-auto border border-gray-300 sm:rounded-lg">
                <table class="w-full table-auto">
                    <thead class="bg-gray-700 text-gray-100">
                        <tr class="text-left text-sm font-semibold uppercase">
                            <td class="px-6 py-3">ID</td>
                            <td class="px-6 py-3">Cliente</td>
                            <td class="px-6 py-3">Vehículo</td>
                            <td class="px-6 py-3">Vehículo Cliente</td>
                            <td class="px-6 py-3">Repuesto</td>
                            <td class="px-6 py-3">Mantenimiento</td>
                            <td class="px-6 py-3">Nombre</td>
                            <td class="px-6 py-3">Fecha de Emisión</td>
                            <td class="px-6 py-3">Subtotal</td>
                            <td class="px-6 py-3">Impuestos</td>
                            <td class="px-6 py-3">Total</td>
                            <td class="px-6 py-3 text-center">Opciones</td>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-300">
                        @foreach($proformas as $item)
                        <tr class="text-sm text-gray-800 even:bg-gray-100 odd:bg-white hover:bg-gray-200">
                            <td class="px-6 py-4 font-semibold">
                                <span class="px-3 py-1 text-xs font-bold rounded-full bg-gray-500 text-white">
                                    {{$item->id}}
                                </span>
                            </td>
                            <td class="px-6 py-4">{{ optional($item->cliente)->nombre ?? 'No disponible' }}</td>
                            <td class="px-6 py-4">{{ optional($item->vehiculo)->marca ?? 'No disponible' }}</td>
                            <td class="px-6 py-4">{{ optional($item->vehiculocliente)->marca ?? 'No disponible' }}</td>
                            <td class="px-6 py-4">{{ optional($item->repuesto)->nombre ?? 'No disponible' }}</td>
                            <td class="px-6 py-4">{{ optional($item->mantenimiento)->descripcion ?? 'No disponible' }}</td>
                            <td class="px-6 py-4">{{$item->nombre}}</td>
                            <td class="px-6 py-4">{{$item->fecha_de_emision}}</td>
                            <td class="px-6 py-4">{{$item->subtotal}}</td>
                            <td class="px-6 py-4">{{$item->impuestos}}</td>
                            <td class="px-6 py-4">{{$item->total}}</td>
                            <td class="px-6 py-4 flex gap-2 justify-end">
                                <x-mini-button class="bg-gray-500 hover:bg-gray-600 text-white" rounded icon="pencil" wire:click="edit({{$item}})" />
                                @if ($active==1)
                                    <x-mini-button class="bg-gray-400 hover:bg-gray-500 text-white" rounded icon="x-mark" wire:click="confirmSimple({{$item}})" />
                                @else
                                    <x-mini-button class="bg-gray-400 hover:bg-gray-500 text-white" rounded icon="exclamation-triangle" wire:click="renovate({{$item}})" />
                                @endif

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    @if(!$proformas->count())
                    <x-alert title="* No existe ningún registro coincidente" info />
                    @endif
                </div>
            </div>
            <div class="px-6 py-3">
                {{$proformas->links()}}
            </div>
        </div>
    </div>
</div>
