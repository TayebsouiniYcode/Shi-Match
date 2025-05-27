<div class="flex-1 p-8">
    <div class="max-w-7xl mx-auto">
        <!-- Page header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Trouver des joueurs</h1>
            <p class="mt-2 text-gray-600">Découvrez de nouveaux partenaires de sport près de chez vous</p>
        </div>

        <!-- Search and filters -->
        <div class="bg-white shadow rounded-lg p-6 mb-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Sport</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Tous les sports</option>
                        <option>Football</option>
                        <option>Basketball</option>
                        <option>Tennis</option>
                        <option>Volleyball</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Niveau</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Tous niveaux</option>
                        <option>Débutant</option>
                        <option>Intermédiaire</option>
                        <option>Avancé</option>
                        <option>Expert</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Distance</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>5 km</option>
                        <option>10 km</option>
                        <option>20 km</option>
                        <option>50 km</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Disponibilité</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Toute la semaine</option>
                        <option>En semaine</option>
                        <option>Week-end</option>
                        <option>Soir uniquement</option>
                    </select>
                </div>
            </div>
            <div class="mt-4">
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md font-medium">
                    Rechercher
                </button>
            </div>
        </div>

        <!-- Players grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Player card 1 -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Profile">
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Marc Dubois</h3>
                            <p class="text-sm text-gray-500">25 ans • 2.3 km</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center mb-2">
                            <span class="text-lg mr-2">⚽</span>
                            <span class="text-sm font-medium">Football</span>
                            <span class="ml-auto text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Intermédiaire</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-4 w-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="text-sm text-gray-600">4.8 (12 avis)</span>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 mb-4">Passionné de football, je cherche des partenaires pour des matches en soirée et le week-end.</p>
                    <div class="flex space-x-2">
                        <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                            Contacter
                        </button>
                        <button class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Profil
                        </button>
                    </div>
                </div>
            </div>

            <!-- Player card 2 -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Profile">
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Sophie Martin</h3>
                            <p class="text-sm text-gray-500">28 ans • 1.8 km</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center mb-2">
                            <span class="text-lg mr-2">🎾</span>
                            <span class="text-sm font-medium">Tennis</span>
                            <span class="ml-auto text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">Avancé</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-4 w-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="text-sm text-gray-600">4.9 (8 avis)</span>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 mb-4">Joueuse de tennis expérimentée, disponible pour des parties en journée et week-end.</p>
                    <div class="flex space-x-2">
                        <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                            Contacter
                        </button>
                        <button class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Profil
                        </button>
                    </div>
                </div>
            </div>

            <!-- Player card 3 -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Profile">
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Alex Rousseau</h3>
                            <p class="text-sm text-gray-500">32 ans • 3.1 km</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center mb-2">
                            <span class="text-lg mr-2">🏀</span>
                            <span class="text-sm font-medium">Basketball</span>
                            <span class="ml-auto text-xs bg-purple-100 text-purple-800 px-2 py-1 rounded-full">Expert</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-4 w-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="text-sm text-gray-600">5.0 (15 avis)</span>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 mb-4">Ancien joueur semi-pro, je cherche des équipes pour des matches compétitifs.</p>
                    <div class="flex space-x-2">
                        <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                            Contacter
                        </button>
                        <button class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Profil
                        </button>
                    </div>
                </div>
            </div>

            <!-- Player card 4 -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Profile">
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Emma Leroy</h3>
                            <p class="text-sm text-gray-500">24 ans • 4.2 km</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center mb-2">
                            <span class="text-lg mr-2">🏐</span>
                            <span class="text-sm font-medium">Volleyball</span>
                            <span class="ml-auto text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full">Intermédiaire</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-4 w-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="text-sm text-gray-600">4.7 (6 avis)</span>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 mb-4">Joueuse de volleyball motivée, je recherche une équipe pour des tournois locaux.</p>
                    <div class="flex space-x-2">
                        <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                            Contacter
                        </button>
                        <button class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Profil
                        </button>
                    </div>
                </div>
            </div>

            <!-- Player card 5 -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Profile">
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Thomas Blanc</h3>
                            <p class="text-sm text-gray-500">29 ans • 2.7 km</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center mb-2">
                            <span class="text-lg mr-2">🏓</span>
                            <span class="text-sm font-medium">Ping-pong</span>
                            <span class="ml-auto text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">Avancé</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-4 w-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="text-sm text-gray-600">4.6 (9 avis)</span>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 mb-4">Joueur de ping-pong passionné, disponible pour des parties techniques et compétitives.</p>
                    <div class="flex space-x-2">
                        <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                            Contacter
                        </button>
                        <button class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Profil
                        </button>
                    </div>
                </div>
            </div>

            <!-- Player card 6 -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Profile">
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Julie Moreau</h3>
                            <p class="text-sm text-gray-500">26 ans • 1.5 km</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center mb-2">
                            <span class="text-lg mr-2">🏸</span>
                            <span class="text-sm font-medium">Badminton</span>
                            <span class="ml-auto text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full">Débutant</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-4 w-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <span class="text-sm text-gray-600">4.5 (4 avis)</span>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600 mb-4">Nouvelle au badminton, je cherche des partenaires patients pour progresser ensemble.</p>
                    <div class="flex space-x-2">
                        <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                            Contacter
                        </button>
                        <button class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Profil
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
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
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Suivant</span>
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </nav>
        </div>
    </div>
</div>