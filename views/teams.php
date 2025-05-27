<?= include './../views/components/teams/herosection.php'; ?>
<?= include './../views/components/teams/filter.php'; ?>
    

        <!-- Teams Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Team Card 1 -->
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <img class="h-16 w-16 rounded-lg" src="/placeholder.svg?height=64&width=64" alt="Team Logo">
                        <div class="ml-4 flex-1">
                            <h3 class="text-lg font-medium text-gray-900">Les Tigres de Paris</h3>
                            <p class="text-sm text-gray-500">Paris, Île-de-France</p>
                            <div class="flex items-center mt-1">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    🟢 Recrute
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                ⚽ Football
                            </span>
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                Intermédiaire
                            </span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="h-4 w-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span>4.7 (23 avis)</span>
                            <span class="ml-2">• 12/15 membres</span>
                        </div>
                    </div>
                    
                    <p class="text-sm text-gray-600 mb-4">Équipe de football passionnée cherchant de nouveaux talents pour compléter notre effectif. Ambiance conviviale garantie !</p>
                    
                    <div class="mb-4">
                        <div class="flex items-center text-xs text-gray-500 mb-1">
                            <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Entraînements: Mer 19h, Sam 14h
                        </div>
                        <div class="flex items-center text-xs text-gray-500">
                            <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Stade Municipal - 2.3 km
                        </div>
                    </div>
                    
                    <div class="flex space-x-2">
                        <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded-md text-sm font-medium">
                            Rejoindre
                        </button>
                        <button class="px-3 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Détails
                        </button>
                        <button class="px-3 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Défier
                        </button>
                    </div>
                </div>
            </div>

            <!-- Team Card 2 -->
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <img class="h-16 w-16 rounded-lg" src="/placeholder.svg?height=64&width=64" alt="Team Logo">
                        <div class="ml-4 flex-1">
                            <h3 class="text-lg font-medium text-gray-900">Basket Club Central</h3>
                            <p class="text-sm text-gray-500">Paris, Île-de-France</p>
                            <div class="flex items-center mt-1">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    🔴 Complet
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-800">
                                🏀 Basketball
                            </span>
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                Avancé
                            </span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="h-4 w-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span>4.9 (31 avis)</span>
                            <span class="ml-2">• 15/15 membres</span>
                        </div>
                    </div>
                    
                    <p class="text-sm text-gray-600 mb-4">Équipe de basketball compétitive avec un excellent palmarès. Nous participons aux championnats régionaux.</p>
                    
                    <div class="mb-4">
                        <div class="flex items-center text-xs text-gray-500 mb-1">
                            <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Entraînements: Mar 20h, Jeu 20h, Sam 16h
                        </div>
                        <div class="flex items-center text-xs text-gray-500">
                            <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Gymnase Central - 1.8 km
                        </div>
                    </div>
                    
                    <div class="flex space-x-2">
                        <button disabled class="flex-1 bg-gray-300 text-gray-500 px-3 py-2 rounded-md text-sm font-medium cursor-not-allowed">
                            Liste d'attente
                        </button>
                        <button class="px-3 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Détails
                        </button>
                        <button class="px-3 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Défier
                        </button>
                    </div>
                </div>
            </div>

            <!-- Team Card 3 -->
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <img class="h-16 w-16 rounded-lg" src="/placeholder.svg?height=64&width=64" alt="Team Logo">
                        <div class="ml-4 flex-1">
                            <h3 class="text-lg font-medium text-gray-900">Tennis Amateurs</h3>
                            <p class="text-sm text-gray-500">Boulogne-Billancourt</p>
                            <div class="flex items-center mt-1">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    🟢 Recrute
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                🎾 Tennis
                            </span>
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                Débutant
                            </span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="h-4 w-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span>4.5 (12 avis)</span>
                            <span class="ml-2">• 8/12 membres</span>
                        </div>
                    </div>
                    
                    <p class="text-sm text-gray-600 mb-4">Groupe de tennis pour débutants et joueurs occasionnels. Ambiance détendue et apprentissage mutuel.</p>
                    
                    <div class="mb-4">
                        <div class="flex items-center text-xs text-gray-500 mb-1">
                            <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Sessions: Dim 10h-12h
                        </div>
                        <div class="flex items-center text-xs text-gray-500">
                            <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Club de Tennis Municipal - 4.2 km
                        </div>
                    </div>
                    
                    <div class="flex space-x-2">
                        <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded-md text-sm font-medium">
                            Rejoindre
                        </button>
                        <button class="px-3 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Détails
                        </button>
                        <button class="px-3 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Défier
                        </button>
                    </div>
                </div>
            </div>

            <!-- Team Card 4 -->
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <img class="h-16 w-16 rounded-lg" src="/placeholder.svg?height=64&width=64" alt="Team Logo">
                        <div class="ml-4 flex-1">
                            <h3 class="text-lg font-medium text-gray-900">Volleyball Dynamique</h3>
                            <p class="text-sm text-gray-500">Neuilly-sur-Seine</p>
                            <div class="flex items-center mt-1">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    🟢 Recrute
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                🏐 Volleyball
                            </span>
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                Intermédiaire
                            </span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="h-4 w-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span>4.6 (18 avis)</span>
                            <span class="ml-2">• 10/14 membres</span>
                        </div>
                    </div>
                    
                    <p class="text-sm text-gray-600 mb-4">Équipe de volleyball mixte cherchant joueurs motivés pour tournois et matches amicaux.</p>
                    
                    <div class="mb-4">
                        <div class="flex items-center text-xs text-gray-500 mb-1">
                            <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Entraînements: Lun 19h, Ven 20h
                        </div>
                        <div class="flex items-center text-xs text-gray-500">
                            <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Gymnase Neuilly - 3.7 km
                        </div>
                    </div>
                    
                    <div class="flex space-x-2">
                        <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded-md text-sm font-medium">
                            Rejoindre
                        </button>
                        <button class="px-3 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Détails
                        </button>
                        <button class="px-3 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Défier
                        </button>
                    </div>
                </div>
            </div>

            <!-- Team Card 5 -->
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <img class="h-16 w-16 rounded-lg" src="/placeholder.svg?height=64&width=64" alt="Team Logo">
                        <div class="ml-4 flex-1">
                            <h3 class="text-lg font-medium text-gray-900">Handball Elite</h3>
                            <p class="text-sm text-gray-500">Levallois-Perret</p>
                            <div class="flex items-center mt-1">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    🟡 Sélectif
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                🤾 Handball
                            </span>
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                Expert
                            </span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="h-4 w-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span>4.8 (27 avis)</span>
                            <span class="ml-2">• 16/18 membres</span>
                        </div>
                    </div>
                    
                    <p class="text-sm text-gray-600 mb-4">Équipe de handball de haut niveau participant aux championnats nationaux. Recrutement sur essai.</p>
                    
                    <div class="mb-4">
                        <div class="flex items-center text-xs text-gray-500 mb-1">
                            <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Entraînements: Mar 20h, Jeu 20h, Sam 14h
                        </div>
                        <div class="flex items-center text-xs text-gray-500">
                            <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Palais des Sports - 5.1 km
                        </div>
                    </div>
                    
                    <div class="flex space-x-2">
                        <button class="flex-1 bg-yellow-600 hover:bg-yellow-700 text-white px-3 py-2 rounded-md text-sm font-medium">
                            Candidater
                        </button>
                        <button class="px-3 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Détails
                        </button>
                        <button class="px-3 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Défier
                        </button>
                    </div>
                </div>
            </div>

            <!-- Team Card 6 -->
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <img class="h-16 w-16 rounded-lg" src="/placeholder.svg?height=64&width=64" alt="Team Logo">
                        <div class="ml-4 flex-1">
                            <h3 class="text-lg font-medium text-gray-900">Badminton Loisir</h3>
                            <p class="text-sm text-gray-500">Issy-les-Moulineaux</p>
                            <div class="flex items-center mt-1">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    🟢 Recrute
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-pink-100 text-pink-800">
                                🏸 Badminton
                            </span>
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                Débutant
                            </span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="h-4 w-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span>4.4 (9 avis)</span>
                            <span class="ml-2">• 6/10 membres</span>
                        </div>
                    </div>
                    
                    <p class="text-sm text-gray-600 mb-4">Groupe de badminton pour débutants et joueurs loisir. Venez découvrir ce sport dans la bonne humeur !</p>
                    
                    <div class="mb-4">
                        <div class="flex items-center text-xs text-gray-500 mb-1">
                            <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Sessions: Mer 18h30, Sam 15h
                        </div>
                        <div class="flex items-center text-xs text-gray-500">
                            <svg class="h-3 w-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Gymnase Issy - 6.8 km
                        </div>
                    </div>
                    
                    <div class="flex space-x-2">
                        <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white px-3 py-2 rounded-md text-sm font-medium">
                            Rejoindre
                        </button>
                        <button class="px-3 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Détails
                        </button>
                        <button class="px-3 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Défier
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Précédent</span>
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="bg-blue-50 border-blue-500 text-blue-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">1</a>
                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">2</a>
                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">3</a>
                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">4</a>
                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">5</a>
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Suivant</span>
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </nav>
        </div>
    </div>