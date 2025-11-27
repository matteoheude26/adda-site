@extends('base')

@section('contenu')

    <div class="grid grid-cols-1 gap-4 mx-6">
        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex">
           

            <!-- Définir la charte de confidentalité dans cette div -->
			<h3>1. Données collectées</h3>
			<br>
			<p>
			L’association peut être amenée à collecter les données suivantes :<br>
			Nom, prénom<br>
			Adresse postale et e-mail<br>
			Numéro de téléphone<br>
			Date de naissance<br>
			Données de connexion<br>
			</p>
			<br>
			
			<h3>2. Finalités du traitement</h3>
			<br>
			<p>
			Les données sont collectées dans le cadre des activités de l’association et servent à :<br>
			Gérer les adhésions et cotisations<br>
			Communiquer sur les activités, événements et projets de l’association<br>
			Gérer les inscriptions à des manifestations ou formations<br>
			Tenir la comptabilité associative<br>
			Répondre aux demandes de contact<br>
			</p>
			<br>
			
			<h3>3. Durée de conservation des données</h3>
			<br>
			<p>
			Les données personnelles sont conservées pour la durée strictement nécessaire aux finalités pour lesquelles elles ont été collectées :<br>
			Données des adhérents : pendant la durée de l’adhésion + 3 ans<br>
			Données comptables : 10 ans<br>
			Données de contact (newsletter) : jusqu’au retrait du consentement<br>
			</p>
			

        </div>

        <a href="{{route('index')}}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="sm:fixed sm:left-0 self-center shrink-0 stroke-red-500 w-6 h-6 mx-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M 4.5 12 l 6.75 -6.75 M 4.5 12 h 15 M 4.5 12 l 6.75 6.75" />
                </svg>
                <div class="px-3 mx-2">Retour</div>
            </div>
        </a>
    </div>

@endsection