<div class="py-4">
    <div class="mx-6 mb-6">
        <h2 class="text-3xl font-bold text-gray-900">Repuestos</h2>
        <div class="border-b-4 border-gray-500 w-56 mt-2"></div>
    </div>
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-100 dark:bg-gray-800 shadow-md sm:rounded-lg p-6">
            <div class="flex items-center justify-between gap-4 mb-4 bg-gray-200 p-4 rounded-lg">
                <div class="w-full flex gap-4">
                    <!-- Input de búsqueda -->
                    <div class="relative">
                        <input
                            type="text"
                            wire:model.live="search"
                            placeholder="Buscar repuesto..."
                            class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm"
                        />
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fa fa-search text-gray-400"></i>
                        </span>
                    </div>
                    <!-- Filtros -->
                    <div class="w-1/4">
                        <x-native-select
                            :options="[['name'=>'Activos','id'=>1],['name'=>'Inactivos','id'=>0]]"
                            option-label="name" option-value="id"
                            wire:model.live="active"
                        />
                    </div>
                </div>
                <!-- Botón Nuevo -->
                <div>
                    <x-button class="bg-gray-600 hover:bg-gray-700 text-white" label="Nuevo" icon="plus" wire:click="create()" />
                    @include('livewire.admin.repuesto-create')
                </div>
            </div>
            <!-- Contenedor de Tarjetas -->
            <div class="grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($repuestos as $repuesto)
                <div class="relative bg-white dark:bg-gray-700 p-4 rounded-lg shadow-lg transition-transform transform hover:scale-105 focus:outline-none h-44">
                    <div class="absolute top-0 left-0 bg-gray-600 text-white text-center w-full py-2 rounded-t-lg font-semibold">
                        <i class="fa-solid fa-box-open"></i> {{$repuesto->nombre}}
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-800 dark:text-gray-200 text-sm">
                            <span class="font-bold text-gray-600">Descripción: </span> {{$repuesto->descripcion}}
                        </p>
                        <p class="text-gray-800 dark:text-gray-200 text-sm">
                            <span class="font-bold text-gray-600">Precio: </span> S/.{{$repuesto->precio}}
                        </p>
                        <p class="text-gray-800 dark:text-gray-200 text-sm">
                            <span class="font-bold text-gray-600">Stock: </span> {{$repuesto->stock}}
                        </p>
                        <p class="text-gray-800 dark:text-gray-200 text-sm">
                            <span class="font-bold text-gray-600">Código: </span> {{$repuesto->codigo_repuesto}}
                        </p>
                        <p class="text-gray-800 dark:text-gray-200 text-sm">
                            <span class="font-bold text-gray-600">Marca: </span> {{$repuesto->marca}}
                        </p>
                    </div>
                    <div class="absolute bottom-3 right-3 flex gap-2">
                        <x-mini-button class="bg-gray-600 hover:bg-gray-700 text-white" rounded icon="pencil" wire:click="edit({{$repuesto}})" />
                        @if ($active == 1)
                            <x-mini-button class="bg-red-600 hover:bg-red-700 text-white" rounded icon="x-mark" wire:click="confirmSimple({{$repuesto}})" />
                        @else
                            <x-mini-button class="bg-yellow-600 hover:bg-yellow-700 text-white" rounded icon="exclamation-triangle" wire:click="renovate({{$repuesto}})" />
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Mensaje de vacío -->
            <div class="mt-6">
                @if(!$repuestos->count())
                <x-alert title="No hay registros coincidentes." info />
                @endif
            </div>
        </div>
        <div class="mt-4">
            {{$repuestos->links()}}
        </div>
    </div>
</div>
