@props(['show_navlinks' => true, 'show_profile' => true, 'show_logout' => true])

<nav class="bg-base-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="navbar">
            <div class="navbar-start flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('welcome') }}">
                        <x-application-logo class="block h-9 w-auto stroke-current"/>
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
                        <x-nav-link :href="route('ideas.index')" :active="request()->routeIs('ideas.index') || request()->routeIs('ideas.edit')">
                            {{ __('Ideas') }}
                        </x-nav-link>
                    </div>
                @endif
            </div>
            <div class="navbar-end flex flex-row gap-5">
                <!-- User Actions -->
                <div class="flex items-center space-x-4">
                    @if($show_profile)
                        <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                            {{ __('Profile') }}
                        </x-nav-link>
                    @endif

                    @if($show_logout)
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                    class="btn btn-ghost">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"/>
                                    <path d="M9 12h12l-3 -3"/>
                                    <path d="M18 15l3 -3"/>
                                </svg>
                            </button>
                        </form>
                    @endif
                </div>

                <!-- Language Dropmenu -->
                <x-lang.dropmenu/>

                <!-- Theme Switcher -->
                <x-theme-switch/>
            </div>
        </div>
    </div>
</nav>
