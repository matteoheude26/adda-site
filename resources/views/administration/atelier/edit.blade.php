<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion des ateliers') }}
        </h2>
    </x-slot>


    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="post" action="{{ route('administration.atelier.update',$atelier->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <!-- titre -->
                        <div>
                            <x-input-label for="titre" :value="__('titre')" />
                            <x-text-input id="titre" class="block mt-1 w-full" type="text" name="titre" :value="old('titre', $atelier->titre)" required autofocus />
                            <x-input-error :messages="$errors->get('titre')" class="mt-2" />
                        </div>

                        <!-- description -->
                        <div class="mt-4">
                            <x-input-label for="description" :value="__('description')" />

                            <x-text-input id="description" class="block mt-1 w-full"
                                          type="text"
                                          name="description"
                                          :value="old('description', $atelier->description)"
                                          required />

                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <!-- details -->
                        <div class="mt-4">
                            <x-input-label for="details" :value="__('details')" />

                            <x-text-input id="details" class="block mt-1 w-full"
                                          type="text"
                                          name="details"
                                          :value="old('details', $atelier->details)"
                                          required />

                            <x-input-error :messages="$errors->get('details')" class="mt-2" />
                        </div>

                        <!-- jour-->
                        <div class="mt-4">
                            <x-input-label for="jour" :value="__('jour')" />
                            <select id="jour" name="jour" 
                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" 
                                    required>
                                <option value="lundi" {{ old('jour') == 'lundi' ? 'selected' : '' }}>Lundi</option>
                                <option value="mardi" {{ old('jour') == 'mardi' ? 'selected' : '' }}>Mardi</option>
                                <option value="mercredi" {{ old('jour') == 'mercredi' ? 'selected' : '' }}>Mercredi</option>
                                <option value="jeudi" {{ old('jour') == 'jeudi' ? 'selected' : '' }}>Jeudi</option>
                                <option value="vendredi" {{ old('jour') == 'vendredi' ? 'selected' : '' }}>Vendredi</option>
                                <option value="samedi" {{ old('jour') == 'samedi' ? 'selected' : '' }}>Samedi</option>
                                <option value="dimanche" {{ old('jour') == 'dimanche' ? 'selected' : '' }}>Dimanche</option>
                            </select>
                            <x-input-error :messages="$errors->get('jour')" class="mt-2" />
                        </div>

                        <!-- horraire-->
                        <div class="mt-4">
                            <x-input-label for="horaire" :value="__('horaire')" />
                            <x-text-input id="horaire" class="block mt-1 w-full"
                                          type="time"
                                          name="horaire"
                                          :value="old('horaire', '12:00')"
                                          required/>
                            <x-input-error :messages="$errors->get('horaire')" class="mt-2" />
                        </div>

                        <!-- duree-->
                        <div class="mt-4">
                            <x-input-label for="duree" :value="__('durée (en heures)')" />
                            <x-text-input id="duree" class="block mt-1 w-full"
                                          type="number"
                                          name="duree"
                                          :value="old('duree', '2')"
                                          min="1"
                                          max="8"
                                          step="0.5"
                                          required/>
                            <x-input-error :messages="$errors->get('duree')" class="mt-2" />
                        </div>

                        <!-- picto -->
                        <div class="mt-4">

                            <x-input-label for="picto" :value="__('picto')" />

                            <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <img src="{{asset('storage')}}{{$atelier->picto}}"/>
                            </div>

                            <x-text-input id="picto" class="block mt-1 w-full"
                                          type="file"
                                          name="picto"
                                          :value="old('picto', $atelier->picto)"
                                           />

                            <x-input-error :messages="$errors->get('picto')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href={{Route('administration.atelier.index')}}>
                                <x-secondary-button class="ml-3">
                                    {{ __('Annuler') }}
                                </x-secondary-button>
                            </a>
                            <x-primary-button class="ml-3">
                                {{ __('Modifier') }}
                            </x-primary-button>

                        </div>
                    </form>
                    <div class="flex items-center justify-end mt-4">
                        <x-danger-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-atelier-deletion')" class="ml-3">
                            {{ __('Supprimer') }}
                        </x-danger-button>
                        <x-modal name="confirm-atelier-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                            <form method="post" action="{{ route('administration.atelier.destroy',$atelier->id) }}" class="p-6">
                                @csrf
                                @method('delete')

                                <h2 class="text-lg font-medium text-gray-900">
                                    {{ __('Êtes-vous certain de vouloir supprimer cet atelier ?') }}
                                </h2>

                                <div class="mt-6 flex justify-end">
                                    <x-secondary-button x-on:click="$dispatch('close')">
                                        {{ __('Annuler') }}
                                    </x-secondary-button>

                                    <x-danger-button class="ml-3">
                                        {{ __('Supprimer définitivement') }}
                                    </x-danger-button>
                                </div>
                            </form>
                        </x-modal>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
