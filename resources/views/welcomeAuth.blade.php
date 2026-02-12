<x-layouts.layout>
    <div class="hero bg-base-200 flex-1 flex items-center justify-center">
        <div class="hero-content text-center">
            <div class="mx-auto w-screen px-8 py-32">
                <div class="mx-auto max-w-prose text-center">
                    <h1 class="text-4xl font-bold">
                        {{ __('Hello') }} <strong class="text-primary">{{ Auth::user()->name }}</strong>!
                    </h1>
                    <p class="mt-4 text-pretty">
                        {{ __('Save your ideas here') }}
                    </p>
                    <div class="mt-4 flex justify-center gap-4 sm:mt-6">
                        <a class="btn btn-soft btn-primary btn-wide"
                           href="{{ route('ideas.create') }}">
                            {{ __('Go') }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M1 8a.5.5 0 0 1 .5-.5h11.793L9.146 3.354a.5.5 0 1 1 .708-.708l5 5a.5.5 0 0 1 0 .708l-5 5a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.layout>
