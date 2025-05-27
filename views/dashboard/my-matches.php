<!-- Main content -->
<div class="flex-1 p-8">
    <div class="max-w-7xl mx-auto">
        <!-- Page header -->
        <div class="mb-8 flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Mes matches</h1>
                <p class="mt-2 text-gray-600">Gérez vos matches passés et à venir</p>
            </div>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md font-medium">
                + Créer un match
            </button>
        </div>

        <!-- Tabs -->
        <div class="mb-8">
            <div class="border-b border-gray-200">
                <nav class="-mb-px flex space-x-8">
                    <a href="#" class="border-blue-500 text-blue-600 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm">
                        À venir (3)
                    </a>
                    <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm">
                        Terminés (24)
                    </a>
                    <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm">
                        Annulés (2)
                    </a>
                </nav>
            </div>
        </div>

        <!-- Upcoming matches -->
        <div class="space-y-6">
            <!-- Match 1 -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <span class="text-3xl mr-4">🎾</span>
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Tennis - Match simple</h3>
                                <p class="text-sm text-gray-500">Club de Tennis Municipal</p>
                            </div>
                        </div>
                        <span class="px-3 py-1 text-sm font-medium bg-blue-100 text-blue-800 rounded-full">Confirmé</span>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-sm text-gray-600">Demain, 16h00 - 17h30</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="text-sm text-gray-600">123 Rue du Sport, Paris</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span class="text-sm text-gray-600">Sophie Martin</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Sophie">
                            <span class="text-sm font-medium text-gray-900">Sophie Martin</span>
                            <span class="text-xs text-gray-500">• Niveau Avancé</span>
                        </div>
                        <div class="flex space-x-2">
                            <button class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                                Modifier
                            </button>
                            <button class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md text-sm font-medium">
                                Contacter
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Match 2 -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <span class="text-3xl mr-4">⚽</span>
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Football - Match 5v5</h3>
                                <p class="text-sm text-gray-500">Stade Municipal</p>
                            </div>
                        </div>
                        <span class="px-3 py-1 text-sm font-medium bg-yellow-100 text-yellow-800 rounded-full">En attente</span>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-sm text-gray-600">Samedi, 14h00 - 16h00</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="text-sm text-gray-600">456 Avenue des Sports, Paris</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <span class="text-sm text-gray-600">7/10 joueurs</span>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <p class="text-sm text-gray-600 mb-2">Joueurs confirmés :</p>
                        <div class="flex -space-x-2">
                            <img class="h-8 w-8 rounded-full border-2 border-white" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Marc">
                            <img class="h-8 w-8 rounded-full border-2 border-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Alex">
                            <img class="h-8 w-8 rounded-full border-2 border-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Thomas">
                            <div class="h-8 w-8 rounded-full border-2 border-white bg-gray-200 flex items-center justify-center">
                                <span class="text-xs font-medium text-gray-600">+4</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-600">
                            <span class="font-medium">3 places restantes</span> • Niveau Intermédiaire
                        </div>
                        <div class="flex space-x-2">
                            <button class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                                Modifier
                            </button>
                            <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md text-sm font-medium">
                                Inviter
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Match 3 -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <span class="text-3xl mr-4">🏀</span>
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Basketball - Match 3v3</h3>
                                <p class="text-sm text-gray-500">Gymnase Central</p>
                            </div>
                        </div>
                        <span class="px-3 py-1 text-sm font-medium bg-green-100 text-green-800 rounded-full">Complet</span>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-sm text-gray-600">Dimanche, 10h00 - 12h00</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="text-sm text-gray-600">789 Rue du Gymnase, Paris</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <span class="text-sm text-gray-600">6/6 joueurs</span>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <p class="text-sm text-gray-600 mb-2">Équipes :</p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-blue-50 p-3 rounded-lg">
                                <p class="text-sm font-medium text-blue-900 mb-2">Équipe Bleue</p>
                                <div class="space-y-1">
                                    <div class="flex items-center">
                                        <img class="h-6 w-6 rounded-full mr-2" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Jean">
                                        <span class="text-xs text-blue-800">Jean (Vous)</span>
                                    </div>
                                    <div class="flex items-center">
                                        <img class="h-6 w-6 rounded-full mr-2" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Alex">
                                        <span class="text-xs text-blue-800">Alex</span>
                                    </div>
                                    <div class="flex items-center">
                                        <img class="h-6 w-6 rounded-full mr-2" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Marc">
                                        <span class="text-xs text-blue-800">Marc</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-red-50 p-3 rounded-lg">
                                <p class="text-sm font-medium text-red-900 mb-2">Équipe Rouge</p>
                                <div class="space-y-1">
                                    <div class="flex items-center">
                                        <img class="h-6 w-6 rounded-full mr-2" src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Sophie">
                                        <span class="text-xs text-red-800">Sophie</span>
                                    </div>
                                    <div class="flex items-center">
                                        <img class="h-6 w-6 rounded-full mr-2" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Emma">
                                        <span class="text-xs text-red-800">Emma</span>
                                    </div>
                                    <div class="flex items-center">
                                        <img class="h-6 w-6 rounded-full mr-2" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Julie">
                                        <span class="text-xs text-red-800">Julie</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-600">
                            <span class="font-medium text-green-600">Match complet</span> • Niveau Avancé
                        </div>
                        <div class="flex space-x-2">
                            <button class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                                Détails
                            </button>
                            <button class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md text-sm font-medium">
                                Chat groupe
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>