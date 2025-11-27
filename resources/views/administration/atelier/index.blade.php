<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion des ateliers') }}
        </h2>
    </x-slot>
    <div class="py-2">
    @if(session('success'))
        <div x-data="{ show: true }" x-show="show" x-transition  x-init="setTimeout(() => show = false, 3000)" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg" style="background-color: lightgreen">
                <div class="p-6 text-gray-900">
                    {{session('success')}}
                </div>
            </div>
        </div>
    @endif
    </div>
     @can('create',\App\Models\Atelier::class)
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <a href="{{route('administration.atelier.create')}}">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                Ajouter un nouvel atelier
                            </h2>
                            <x-primary-button class="ml-3" style="float:right; margin-bottom:10px">
                                {{ __('New') }}
                            </x-primary-button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endcan

    @foreach($ateliers as $atelier)
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @can('update',$atelier)
            <a href="{{route('administration.atelier.edit',$atelier->id)}}">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{$atelier->titre}}
                        </h2>
                        {{$atelier->description}}
                        <x-primary-button class="ml-3" style="float:right">
                            {{ __('Edit') }}
                        </x-primary-button>
                    </div>
                </div>
            </a>
            @endcan
            @cannot('update',$atelier)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{$atelier->titre}}
                        </h2>
                        {{$atelier->description}}
                    </div>
                </div>
            @endcannot
        </div>
    </div>
    @endforeach
</x-app-layout>
