<div class="flex-1 p-8">
    <div class=" mx-auto">
        <!-- Page header -->
        <div class="mb-8">
            <div class="flex items-center mb-4">
                <a href="/dashboard" class="text-gray-500 hover:text-gray-700 mr-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </a>
                <h1 class="text-3xl font-bold text-gray-900">Créer une nouvelle équipe</h1>
            </div>
            <p class="text-gray-600">Rassemblez vos amis et créez votre équipe pour participer à des tournois</p>
        </div>

        <!-- Form -->
        <div class="bg-white shadow rounded-lg">
            <form class="p-8 space-y-8" method="post" action="/addTeam">
                <!-- Basic Information -->
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-6">Informations de base</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="team-name" class="block text-sm font-medium text-gray-700 mb-2">
                                Nom de l'équipe *
                            </label>
                            <input id="team-name" name="team-name" type="text" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Les Tigres de Paris">
                        </div>
                        
                        <div>
                            <label for="sport" class="block text-sm font-medium text-gray-700 mb-2">
                                Sport  (not working now)
                            </label>
                            <select id="sport" name="sport" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Sélectionner un sport</option>
                                <option value="football">Football</option>
                                <option value="basketball">Basketball</option>
                                <option value="volleyball">Volleyball</option>
                                <option value="handball">Handball</option>
                                <option value="rugby">Rugby</option>
                                <option value="tennis">Tennis (double)</option>
                                <option value="badminton">Badminton</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                        <div>
                            <label for="minage" class="block text-sm font-medium text-gray-700 mb-2">
                                Min age
                            </label>
                            <input id="minage" name="minage" type="number" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="18">
                        </div>
                        
                        <div>
                            <label for="maxage" class="block text-sm font-medium text-gray-700 mb-2">
                                Min age
                            </label>
                            <input id="maxage" name="maxage" type="number" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="35">
                        </div>
                        
                    </div>

                    <div class="mt-6">
                        <label for="maxplayers" class="block text-sm font-medium text-gray-700 mb-2">
                            Nombre maximum des joueurs
                        </label>
                        <input id="maxplayers" name="maxplayers" type="text" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="23">    
                    </div>

                    <div class="mt-6">
                        <label for="quote" class="block text-sm font-medium text-gray-700 mb-2">
                            Quote de l'équipe
                        </label>
                        <input id="quote" name="quote" type="text" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Hala Madrid !!!">    
                    </div>
                    
                    <!-- <div class="mt-6">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                            Description de l'équipe
                        </label>
                        <textarea id="description" name="description" rows="4"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Décrivez votre équipe, votre style de jeu, vos objectifs..."></textarea>
                    </div> -->
                </div>

                <!-- Location -->
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-6">Localisation</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="pays" class="block text-sm font-medium text-gray-700 mb-2">
                                Pays *
                            </label>
                            <input id="pays" name="pays" type="text" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Maroc">
                        </div>
                        
                        <div>
                            <label for="ville" class="block text-sm font-medium text-gray-700 mb-2">
                                Ville
                            </label>
                            <input id="ville" name="ville" type="text"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Youssoufia">
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <label for="zipcode" class="block text-sm font-medium text-gray-700 mb-2">
                            code postale
                        </label>
                        <input id="zipcode" name="zipcode" type="text"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="46300">
                    </div>
                </div>

                <!-- Team Privacy -->
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-6">Confidentialité (Comming soon)</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <input id="public-team" name="team-privacy" type="radio" value="public" checked
                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 mt-1">
                            <div class="ml-3">
                                <label for="public-team" class="block text-sm font-medium text-gray-900">
                                    Équipe publique
                                </label>
                                <p class="text-sm text-gray-500">Visible par tous les utilisateurs, les joueurs peuvent demander à rejoindre</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <input id="private-team" name="team-privacy" type="radio" value="private"
                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 mt-1">
                            <div class="ml-3">
                                <label for="private-team" class="block text-sm font-medium text-gray-900">
                                    Équipe privée
                                </label>
                                <p class="text-sm text-gray-500">Visible uniquement sur invitation, vous contrôlez qui peut rejoindre</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Logo -->
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-6">Logo de l'équipe (optionnel)</h3>
                    
                    <div class="flex items-center space-x-6">
                        <div class="shrink-0">
                            <img class="h-20 w-20 object-cover rounded-lg border-2 border-gray-300" 
                                    src="/placeholder.svg?height=80&width=80" alt="Logo équipe">
                        </div>
                        <div class="flex-1">
                            <label for="logo-upload" class="block text-sm font-medium text-gray-700 mb-2">
                                Télécharger un logo
                            </label>
                            <input id="logo-upload" name="logo-upload" type="file" accept="image/*"
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                            <p class="mt-1 text-xs text-gray-500">PNG, JPG jusqu'à 2MB</p>
                        </div>
                    </div>
                </div>

                <!-- Initial Members -->
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-6">Inviter des membres (optionnel) (comming soon)</h3>
                    
                    <div class="space-y-4">
                        <div>
                            <label for="invite-emails" class="block text-sm font-medium text-gray-700 mb-2">
                                Adresses email des joueurs à inviter
                            </label>
                            <textarea id="invite-emails" name="invite-emails" rows="3"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        placeholder="email1@example.com, email2@example.com..."></textarea>
                            <p class="mt-1 text-sm text-gray-500">Séparez les adresses par des virgules</p>
                        </div>
                        
                        <div class="flex items-center">
                            <input id="send-invites" name="send-invites" type="checkbox"
                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="send-invites" class="ml-2 block text-sm text-gray-900">
                                Envoyer les invitations immédiatement après la création
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex justify-end space-x-4 pt-6 border-t border-gray-200">
                    <button type="button" class="px-6 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                        Annuler
                    </button>
                    <button type="submit" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md text-sm font-medium">
                        Créer l'équipe
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>