<div class="py-2">
    <div class="mx-6 mb-4">
        <h2 class="text-3xl font-bold text-gray-800">Repuestos</h2>
        <div class="border-b-2 border-info-600 w-60 mt-2"></div>
    </div>
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 dark:bg-gray-800/50 dark:bg-gradient-to-bl">
            <div class="flex items-center justify-between gap-2 bg-indigo-100 p-2 mb-2 rounded-md">
                <div class="w-full flex gap-2">
                    <!--Input de busqueda   -->
                    <div class="mb-2 w-2/4">
                        <x-input wire:model.live="search" icon="user" placeholder="Buscar repuesto"/>
                    </div>
                    <!--Filtros   -->
                    <div class="mb-2 w-1/4 text-gray-500">
                        <x-native-select
                            :options="[['name'=>'Activos','id'=>1],['name'=>'Inactivos','id'=>0]]"
                            option-label="name" option-value="id"
                            wire:model.live="active"
                        />
                    </div>
                </div>
                <!--Boton nuevo   -->
                <div>
                    <x-button primary label="Nuevo" icon="plus" wire:click="create()"></x-button>
                    @include('livewire.admin.repuesto-create')
                </div>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">
                @foreach ($repuestos as $repuesto)
                <div class="w-full relative bg-blue-50 p-4 rounded-md shadow-lg h-40 motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div class="absolute text-md left-0 top-0 bg-gray-600 text-white w-full py-1 text-center rounded-t-lg">
                        <i class="fa-solid fa-quote-left"></i> {{$repuesto->nombre}} <i class="fa-solid fa-quote-right"></i>
                    </div>
                    <div class="flex gap-4 mt-2 text-sm h-full">
                        <div class="flex items-center">
                            <i class="fa-solid fa-globe text-3xl text-cyan-700"></i>
                        </div>
                        <div class="col-span-2 flex items-center h-full">
                            <div>
                                <div><span class="font-bold text-indigo-600">descripcion </span> {{$repuesto->descripcion}}</div>
                                <div><span class="font-bold text-indigo-600">precio </span> {{$repuesto->precio}}</div>
                                <div><span class="font-bold text-indigo-600">stock</span> {{$repuesto->stock}}</div>
                                <div><span class="font-bold text-indigo-600">codigo </span> {{$repuesto->codigo_repuesto}}</div>
                                <div><span class="font-bold text-indigo-600">marca:</span> {{$repuesto->marca}}</div>

                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-2 right-2">
                        <x-mini-button rounded primary icon="pencil" wire:click="edit({{$repuesto}})"/>
                        @if ($active==1)
                            <x-mini-button rounded negative icon="x-mark" wire:click="confirmSimple({{$repuesto}})"/>
                        @else
                            <x-mini-button rounded warning icon="exclamation-triangle" wire:click="renovate({{$repuesto}})"/>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mt-2">
                @if(!$repuestos->count())
                <x-alert title="* No existe ningun registro coincidente" info />
                @endif
            </div>
        </div>
        <div class="mt-2">
            {{$repuestos->links()}}
        </div>
    </div>
</div>
