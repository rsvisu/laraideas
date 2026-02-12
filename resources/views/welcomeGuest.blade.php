<x-layouts.layout>
    <div class="hero bg-base-200 flex-1 flex items-center justify-center">
        <div class="hero-content text-center">
            <div class="mx-auto w-screen px-8 py-32">
                <div class="mx-auto max-w-prose text-center">
                    <h1 class="text-4xl font-bold">
                        {{ __('Save your ideas easily and') }}
                        <strong class="text-primary"> {{ __('increase') }} </strong>
                        {{ __('your productivity') }}
                    </h1>
                    <p class="mt-4 text-pretty">
                        {{ __('Create your account now or sign in.') }}
                    </p>
                    <div class="mt-4 flex justify-center gap-4 sm:mt-6">
                        <a class="btn btn-soft btn-primary"
                           href="{{ route('register') }}">
                            {{ __('Create account') }}
                        </a>

                        <a class="btn btn-soft"
                           href="{{ route('login') }}">
                            {{ __('Sign in') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.layout>
