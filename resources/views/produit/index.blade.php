@extends('base')

@section('contenu')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 mx-6">
        @foreach($produits as $produit)
        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none">
            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                {{$produit->libelle}}
            </h2>
            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                Provenance : {{$produit->provenance}}
            </p>
        </div>
        @endforeach
    </div>
@endsection