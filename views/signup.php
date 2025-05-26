<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - SportMatch</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center py-8">
    <div class="w-full max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-6">
            <a href="index.html" class="text-3xl font-bold text-blue-600">Shi-match</a>
            <h2 class="mt-4 text-2xl font-extrabold text-gray-900">
                Créez votre compte
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                Ou
                <a href="/login" class="font-medium text-blue-600 hover:text-blue-500">
                    connectez-vous à votre compte existant
                </a>
            </p>
        </div>

        <!-- Form Container -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <form class="space-y-4" method="post" action="/signup">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label for="firstname" class="block text-sm font-medium text-gray-700 mb-1">
                            Prénom *
                        </label>
                        <input id="firstname" name="firstname" type="text" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm"
                               placeholder="Jean">
                    </div>
                    <div>
                        <label for="lastname" class="block text-sm font-medium text-gray-700 mb-1">
                            Nom *
                        </label>
                        <input id="lastname" name="lastname" type="text" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm"
                               placeholder="Dupont">
                    </div>
                    <div>
                        <label for="age" class="block text-sm font-medium text-gray-700 mb-1">
                            Âge *
                        </label>
                        <input id="age" name="age" type="number" min="16" max="100" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm"
                               placeholder="25">
                    </div>
                </div>

                <!-- Row 2: Contact -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                            Email *
                        </label>
                        <input id="email" name="email" type="email" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm"
                               placeholder="jean.dupont@email.com">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">
                            Téléphone *
                        </label>
                        <input id="phone" name="phone" type="tel" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm"
                               placeholder="06 12 34 56 78">
                    </div>
                </div>

                <!-- Row 3: Address -->
                <div>
                    <label for="address" class="block text-sm font-medium text-gray-700 mb-1">
                        Adresse *
                    </label>
                    <input id="address" name="address" type="text" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm"
                           placeholder="123 Rue de la Paix">
                </div>

                <!-- Row 4: Location -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label for="country" class="block text-sm font-medium text-gray-700 mb-1">
                            Pays *
                        </label>
                        <select id="country" name="country" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm">
                            <option value="">Sélectionner</option>
                            <option value="FR">France</option>
                            <option value="BE">Belgique</option>
                            <option value="CH">Suisse</option>
                            <option value="CA">Canada</option>
                            <option value="OTHER">Autre</option>
                        </select>
                    </div>
                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-700 mb-1">
                            Ville *
                        </label>
                        <input id="city" name="city" type="text" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm"
                               placeholder="Paris">
                    </div>
                    <div>
                        <label for="postal_code" class="block text-sm font-medium text-gray-700 mb-1">
                            Code postal *
                        </label>
                        <input id="postal_code" name="postal_code" type="text" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm"
                               placeholder="75001">
                    </div>
                </div>

                <!-- Row 5: Passwords -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                            Mot de passe *
                        </label>
                        <input id="password" name="password" type="password" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm"
                               placeholder="••••••••">
                    </div>
                    <div>
                        <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">
                            Confirmer le mot de passe *
                        </label>
                        <input id="confirm_password" name="confirm_password" type="password" required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm"
                               placeholder="••••••••">
                    </div>
                </div>

                <!-- Terms and Newsletter -->
                <div class="space-y-3 pt-2">
                    <div class="flex items-start">
                        <input id="terms" name="terms" type="checkbox" required
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded mt-1">
                        <label for="terms" class="ml-2 block text-sm text-gray-900">
                            J'accepte les
                            <a href="#" class="text-blue-600 hover:text-blue-500 underline">conditions d'utilisation</a>
                            et la
                            <a href="#" class="text-blue-600 hover:text-blue-500 underline">politique de confidentialité</a>
                        </label>
                    </div>
                    
                    <div class="flex items-start">
                        <input id="newsletter" name="newsletter" type="checkbox"
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded mt-1">
                        <label for="newsletter" class="ml-2 block text-sm text-gray-900">
                            Je souhaite recevoir les actualités et offres de SportMatch
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-4 rounded-md font-medium transition-colors duration-200 text-sm">
                        Créer mon compte
                    </button>
                </div>
            </form>
        </div>

        <!-- Social Login -->
        <div class="mt-6 bg-white shadow-lg rounded-lg p-6">
            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white text-gray-500">Ou s'inscrire avec</span>
                </div>
            </div>

            <div class="mt-4 grid grid-cols-2 gap-3">
                <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition-colors duration-200">
                    <svg class="w-5 h-5" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path fill="currentColor" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="currentColor" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                        <path fill="currentColor" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                    </svg>
                    <span class="ml-2">Google</span>
                </a>

                <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition-colors duration-200">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    <span class="ml-2">Facebook</span>
                </a>
            </div>
        </div>

        <!-- Back to home link -->
        <div class="mt-4 text-center">
            <a href="index.html" class="text-blue-600 hover:text-blue-500 font-medium text-sm">
                ← Retour à l'accueil
            </a>
        </div>
    </div>
</body>
</html>