<div class="py-2">
    <div class="mx-6 mb-4">
        <h2 class="text-3xl font-bold text-gray-800">Miembros</h2>
        <div class="border-b-2 border-info-600 w-44"></div>
    </div>
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 dark:bg-gray-800/50 dark:bg-gradient-to-bl">
        <div class="flex items-center justify-between gap-1">
            <!--Input de busqueda   -->
            <div class="mb-2 w-2/4">
                <x-input wire:model.live="search" icon="user" placeholder="Buscar registro"/>
            </div>
            <!--Filtros   -->
            {{-- <div class="mb-2 w-1/4 text-gray-500">
                <x-native-select placeholder="GÉNERO"
                    :options="['MASCULINO','FEMENINO']"
                    wire:model.live="genderFilter"
                />
            </div> --}}
            <!--Boton nuevo   -->
            <div class="mb-1 ml-10">
                <x-button primary label="Nuevo" icon="plus" wire:click="create()" spinner="create"></x-button>
                @if($isOpen)
                    @include('livewire.admin.person-create')
                @endif
            </div>
        </div>
        <!--Tabla lista de items   -->
        <div class="shadow overflow-x-auto border-b border-gray-200 sm:rounded-lg">
            <table class="w-full table-auto">
              <thead class="bg-indigo-500 text-gray-200 border-b border-black">
                <tr class="text-left text-xs font-bold uppercase">
                  <td scope="col" class="px-6 py-3">ID</td>
                  <td scope="col" class="px-6 py-3">Nombres y apellidos</td>
                  <td scope="col" class="px-6 py-3">Celular</td>
                  <td scope="col" class="px-6 py-3">Cumpleaños</td>
                  <td scope="col" class="px-6 py-3">Bautizado</td>
                  <td scope="col" class="px-6 py-3 text-center">Opciones</td>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200">
                @foreach($members as $item)
                <tr class="text-sm font-medium text-gray-900 even:bg-gray-100 odd:bg-white hover:bg-indigo-100">
                  <td class="px-6 py-4">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                      {{$item->id}}
                    </span>
                  </td>
                  <td class="px-6 py-4 text-xs">{{$item->firstname}}, {{$item->lastname}}</td>
                  <td class="px-6 py-4 text-xs">{{$item->cellphone}}</td>
                  <td class="px-6 py-4 text-xs">{{$item->birthdate}}</td>
                  <td class="px-6 py-4 text-xs">{{$item->baptism}}</td>
                  <td class="px-6 py-4 flex gap-1 justify-end">
                    <x-mini-button rounded primary icon="pencil" wire:click="edit({{$item}})"/>
                    <x-mini-button rounded negative icon="x-mark"  x-on:confirm="{
                        title: '¿Seguro que deseas eliminar?',
                        icon: 'error',
                        method: 'destroy',
                        params: {{$item}}
                    }"/>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        @if(!$members->count())
            No existe ningun registro coincidente
        @endif
        <div class="px-6 py-3">
            {{$members->links()}}
        </div>
        </div>
    </div>
</div>
