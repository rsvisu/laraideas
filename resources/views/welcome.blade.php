<x-layouts.layout>
    @guest
        <section class="flex items-center justify-center h-full">
            <div class="mx-auto w-screen max-w-7xl px-8 py-32">
                <div class="mx-auto max-w-prose text-center">
                    <h1 class="text-4xl font-bold text-gray-900">
                        {{ __('Save your ideas easily and') }}
                        <strong class="text-indigo-600"> {{ __('increase') }} </strong>
                        {{ __('your productivity') }}
                    </h1>

                    <p class="mt-4 text-base text-pretty text-gray-700">
                        {{ __('Create your account now or sign in.') }}
                    </p>

                    <div class="mt-4 flex justify-center gap-4 sm:mt-6">
                        <a class="inline-block rounded border border-indigo-600 bg-indigo-600 px-5 py-3 font-medium text-white shadow-sm transition-colors hover:bg-indigo-700"
                           href="{{ route('register') }}">
                            {{ __('Create account') }}
                        </a>

                        <a class="inline-block rounded border border-gray-200 px-5 py-3 font-medium text-gray-700 shadow-sm transition-colors hover:bg-gray-50 hover:text-gray-900"
                           href="{{ route('login') }}">
                            {{ __('Sign in') }}
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endguest

    @auth
        <section class="flex items-center justify-center h-full">
            <div class="mx-auto w-screen max-w-7xl px-8 py-32">
                <div class="mx-auto max-w-prose text-center">
                    <h1 class="text-4xl font-bold text-gray-900">
                        {{ __('Hello') }} <strong class="text-indigo-600">{{ Auth::user()->name }}</strong>!
                    </h1>

                    <p class="mt-4 text-base text-pretty text-gray-700">
                        {{ __('Save your ideas here') }}
                    </p>

                    <div class="mt-4 flex justify-center gap-4 sm:mt-6">
                        <a class="inline-block rounded border border-indigo-600 bg-indigo-600 px-5 py-3 font-medium text-white shadow-sm transition-colors hover:bg-indigo-700"
                           href="{{ route('ideas') }}">
                            {{ __('Ideas') }}
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endauth
</x-layouts.layout>
