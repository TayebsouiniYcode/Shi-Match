<?php require_once './../views/layouts/commun/navbar.php'; ?>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Trouvez vos partenaires de sport
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100">
                    Connectez-vous avec des joueurs près de chez vous et organisez vos matches
                </p>
                <div class="space-x-4">
                    <a href="/signup" class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-3 rounded-lg text-lg font-semibold inline-block">
                        Commencer maintenant
                    </a>
                    <a href="#features" class="border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-3 rounded-lg text-lg font-semibold inline-block">
                        En savoir plus
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Pourquoi choisir Shi-match ?
                </h2>
                <p class="text-xl text-gray-600">
                    La plateforme qui révolutionne la façon de trouver des partenaires de sport
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Trouvez des joueurs</h3>
                    <p class="text-gray-600">Découvrez des joueurs de votre niveau près de chez vous pour tous types de sports</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Organisez des matches</h3>
                    <p class="text-gray-600">Planifiez facilement vos sessions de sport avec un système de réservation intégré</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Communauté vérifiée</h3>
                    <p class="text-gray-600">Rejoignez une communauté de sportifs passionnés avec des profils vérifiés</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sports Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Sports disponibles
                </h2>
                <p class="text-xl text-gray-600">
                    Trouvez des partenaires pour votre sport favori
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-2">⚽</div>
                    <h3 class="font-semibold">Football</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-2">🏀</div>
                    <h3 class="font-semibold">Basketball</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-2">🎾</div>
                    <h3 class="font-semibold">Tennis</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-2">🏐</div>
                    <h3 class="font-semibold">Volleyball</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-2">🏓</div>
                    <h3 class="font-semibold">Ping-pong</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-2">🏸</div>
                    <h3 class="font-semibold">Badminton</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-2">🏊</div>
                    <h3 class="font-semibold">Natation</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-2">🏃</div>
                    <h3 class="font-semibold">Course</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-blue-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Prêt à commencer ?
            </h2>
            <p class="text-xl mb-8 text-blue-100">
                Rejoignez des milliers de sportifs qui utilisent déjà SportMatch
            </p>
            <a href="/signup" class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-3 rounded-lg text-lg font-semibold inline-block">
                Créer mon compte gratuitement
            </a>
        </div>
    </section>
    
<?php require_once './../views/layouts/commun/footer.php'; ?>

<!-- <?php
// include '../views/layouts/decoration.php';
?> -->