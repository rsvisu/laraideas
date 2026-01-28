<x-layouts.layout>
    <x-slot name="title">{{__('Ideas')}}</x-slot>
    <x-slot name="description">{{__('View your or modify your ideas')}}</x-slot>

    <section class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-6">
        @foreach(range(1,6) as $idea)
            <!-- Card -->
            <article class="card w-full shadow bg-base-100">
                <!-- Card content -->
                <div class="card-body">
                    <!-- Card title -->
                    <h3 class="card-title">{{__('Idea title')}}</h3>
                    <!-- Card description -->
                    <p>{{__('Idea description')}}</p>
                    <!-- Card actions -->
                    <div class="card-actions justify-end mt-4">
                        <button class="btn btn-soft btn-primary btn-sm">{{__('Edit')}}</button>
                        <button class="btn btn-soft btn-secondary btn-sm">{{__('Delete')}}</button>
                    </div>
                </div>
            </article>
        @endforeach
    </section>
</x-layouts.layout>
