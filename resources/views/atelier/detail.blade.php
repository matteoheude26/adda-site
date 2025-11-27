@extends('base')

@section('contenu')

    <div class="grid grid-cols-1 gap-4 mx-6">
        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex">
            <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                <img src="{{asset('storage')}}{{$atelier->picto}}"/>
            </div>
            <h2 class="px-1 mt-4 text-xl font-semibold text-gray-900 dark:text-white">
                {{$atelier->titre}}
            </h2>
            <p class="px-1 mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                {{$atelier->description}}
            </p>
        </div>

        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex">
            <p class="px-1 mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                {{$atelier->details}}
            </p>
        </div>
        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex">
            <p class="px-1 mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                Atelier se déroulant le {{$atelier->jour}} à partir de {{$atelier->horaire}}. Durée : {{$atelier->duree}} heure(s)
            </p>
        </div>
        <a href="{{route('atelier.index')}}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="sm:fixed sm:left-0 self-center shrink-0 stroke-red-500 w-6 h-6 mx-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M 4.5 12 l 6.75 -6.75 M 4.5 12 h 15 M 4.5 12 l 6.75 6.75" />
                </svg>
                <div class="px-3 mx-2">Retour</div>
            </div>
        </a>
    </div>


@endsection
