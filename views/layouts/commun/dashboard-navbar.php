<nav class="bg-white shadow-sm border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <h1 class="text-2xl font-bold text-blue-600">Shi-Match</h1>
                </div>
            </div>

            <div class="flex items-center space-x-4">
                <button class="p-2 text-gray-400 hover:text-gray-500 relative">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM10.5 3.5a6 6 0 0 1 6 6v2l1.5 3h-15l1.5-3v-2a6 6 0 0 1 6-6z"></path>
                    </svg>
                    <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-400"></span>
                </button>
                
                    <div class="relative">

                        <button id="profileButton" class="flex items-center space-x-2 px-3 py-2 rounded-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
                                 alt="Photo de profil" 
                                 class="w-8 h-8 rounded-full object-cover">
                            <span class="text-sm font-medium text-gray-700">
                                <?= $_SESSION["firstname"] . " " . $_SESSION["lastname"]; ?>
                            </span>
                            <svg class="w-4 h-4 text-gray-400 transition-transform duration-200" id="dropdownArrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <!-- Menu dropdown -->
                        <div id="dropdownMenu" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg border border-gray-200 z-50 opacity-0 invisible transform scale-95 transition-all duration-200 origin-top-right">
                            <div class="py-1">
                                <div class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors">
                                    <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    <?= $_SESSION['role'] ?>
                            </div>
                                <a href="/profile" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors">
                                    <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    Profil
                                </a>
                                <a href="/dashboard" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors">
                                    <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                    Dashboard
                                </a>
                                <hr class="my-1 border-gray-200">
                                <a href="/logout" class="flex items-center px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors">
                                    <svg class="w-4 h-4 mr-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                    </svg>
                                    Déconnexion
                                </a>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</nav>

    <script>
        const profileButton = document.getElementById('profileButton');
        const dropdownMenu = document.getElementById('dropdownMenu');
        const dropdownArrow = document.getElementById('dropdownArrow');
        let isDropdownOpen = false;

        // Toggle dropdown
        profileButton.addEventListener('click', function(e) {
            e.stopPropagation();
            toggleDropdown();
        });

        // Fermer le dropdown si on clique ailleurs
        document.addEventListener('click', function(e) {
            if (!profileButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
                closeDropdown();
            }
        });

        // Fermer avec Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && isDropdownOpen) {
                closeDropdown();
            }
        });

        function toggleDropdown() {
            if (isDropdownOpen) {
                closeDropdown();
            } else {
                openDropdown();
            }
        }

        function openDropdown() {
            isDropdownOpen = true;
            dropdownMenu.classList.remove('opacity-0', 'invisible', 'scale-95');
            dropdownMenu.classList.add('opacity-100', 'visible', 'scale-100');
            dropdownArrow.style.transform = 'rotate(180deg)';
        }

        function closeDropdown() {
            isDropdownOpen = false;
            dropdownMenu.classList.remove('opacity-100', 'visible', 'scale-100');
            dropdownMenu.classList.add('opacity-0', 'invisible', 'scale-95');
            dropdownArrow.style.transform = 'rotate(0deg)';
        }
    </script>