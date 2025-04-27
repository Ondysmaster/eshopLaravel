<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 fixed w-full z-50">
    <div class="relative">
        <!-- Animated Colorful Stripes (with dark purple and red) -->
        <div class="absolute inset-0 bg-gradient-to-r from-purple-700 to-red-700 opacity-30 animate-stripes z-0 pointer-events-none"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-8">
                    <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <img src="fotky/auticko.png" alt="Your Logo" class="h-16 w-auto filter invert" />
                   </a>
                </div>




                    <!-- Navigation Links -->
                    <div class="hidden sm:flex space-x-8 sm:ml-10">
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="hover:scale-110 transition-transform duration-300">
                            {{ __('Home') }}
                        </x-nav-link>
                        <x-nav-link :href="route('products.index')" :active="request()->routeIs('products.index')" class="hover:scale-110 transition-transform duration-300">
                            {{ __('Products') }}
                        </x-nav-link>
                        <x-nav-link :href="route('contact.index')" :active="request()->routeIs('contact.index')" class="hover:scale-110 transition-transform duration-300">
                            {{ __('Contact') }}
                        </x-nav-link>
                        <x-nav-link :href="route('questions.index')" :active="request()->routeIs('questions.index')" class="hover:scale-110 transition-transform duration-300">
                            {{ __('Questions') }}
                        </x-nav-link>
                    </div>
                </div>

                <!-- Search Bar with Space -->
                <div class="relative flex items-center gap-6">
                    <form method="GET" action="{{ route('products.search') }}" class="flex items-center space-x-3">
                        <input type="text" name="query" placeholder="Search..." class="border rounded-md p-2 transition-all duration-300 focus:ring-2 focus:ring-indigo-500" />
                        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 p-2 rounded-full">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill="currentColor" d="M12.3 13.4c1.2-1.5 2-3.4 2-5.4C14.3 3.6 11.3 0 7 0S-0.3 3.6-0.3 7c0 3.4 2.7 6 6 6 2.1 0 3.9-.8 5.4-2 1.4 1.5 2.4 3.5 2.4 5.6h1.5c0-2.8-1-5.4-2.6-7.3zm-5.3 0C5 14.3 3 16 0 16c1.2 2 3.6 2 6 0 1-1 2-3 2-5.5zm1-6.4C8 3.5 9 2 9 2c1 0 3 1.4 3 2.1 0 .5-.4 1-1 1-.5 0-1 0-1-.5 0 0-.5-.5-1-1z" />
                            </svg>
                        </button>
                    </form>
                </div>

                <!-- User Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                @auth
                                    <div>{{ Auth::user()->name }}</div>
                                @else
                                    <div>{{ __('Guest') }}</div>
                                @endauth

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            @auth
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                                     onclick="event.preventDefault();
                                                              this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            @else
                                <x-dropdown-link :href="route('login')">
                                    {{ __('Login') }}
                                </x-dropdown-link>
                            @endauth
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" class="hover:text-indigo-600 transition-colors duration-300">
                    {{ __('Home') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('products.index')" :active="request()->routeIs('products.index')" class="hover:text-indigo-600 transition-colors duration-300">
                    {{ __('Products') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name ?? __('Guest') }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email ?? '' }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')" class="hover:text-indigo-600 transition-colors duration-300">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>

<style>
    @keyframes stripes {
        0% { background-position: 100% 0%; }
        50% { background-position: 0% 0%; }
        100% { background-position: 100% 0%; }
    }

    .animate-stripes {
        background-size: 400% 100%;
        animation: stripes 2s linear infinite;
    }
</style>
