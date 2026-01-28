@props(['show_navlinks' => true, 'show_profile' => true, 'show_logout' => true])

<nav class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('welcome') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                @if($show_navlinks)
                    <div class="flex space-x-8 ms-10 items-center">
                        <x-nav-link :href="route('ideas.create')" :active="request()->routeIs('ideas.create')">
                            {{ __('Idea') }}
                        </x-nav-link>
                    </div>
                    <div class="flex space-x-8 ms-10 items-center">
                        <x-nav-link :href="route('ideas.index')" :active="request()->routeIs('ideas.index')">
                            {{ __('Ideas') }}
                        </x-nav-link>
                    </div>
                @endif
            </div>

            <!-- User Actions -->
            <div class="flex items-center space-x-4">
                @if($show_profile)
                    <a href="{{ route('profile.edit') }}" class="text-sm text-gray-500 hover:text-gray-700 transition">
                        {{ __('Profile') }}
                    </a>
                @endif

                @if($show_logout)
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-gray-500 hover:text-gray-700 transition cursor-pointer">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</nav>
