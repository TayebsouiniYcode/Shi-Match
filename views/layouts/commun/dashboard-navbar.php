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
                    <a href="/profile">
                        <button class="flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Profile">
                        <span class="ml-2 text-gray-700 font-medium"><?= $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ?></span>
                        <svg class="ml-1 h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>