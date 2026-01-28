<x-layouts.layout>
    <x-slot name="title">{{__('Ideas')}}</x-slot>
    <x-slot name="description">{{__('View your or modify your ideas')}}</x-slot>

    <section class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-6">
        @foreach($ideas as $idea)
            <!-- Card -->
            <article class="card w-full shadow bg-base-100">
                <!-- Card content -->
                <div class="card-body">
                    <!-- Card title -->
                    <h3 class="card-title">{{ $idea->title }}</h3>
                    <!-- Card description -->
                    <p>{{ $idea->description }}</p>
                    <!-- Card actions -->
                    <div class="card-actions justify-end mt-4">
                        <!-- TODO: Implementar update-->
                        <form action="#" method="post" onsubmit="alert('Sin implementar'); return false">
                            @csrf
                            @method('update')
                            <button class="btn btn-soft btn-primary btn-sm">{{__('Edit')}}</button>
                        </form>
                        <form action="{{ route('ideas.destroy', $idea->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-soft btn-secondary btn-sm">{{__('Delete')}}</button>
                        </form>
                    </div>
                </div>
            </article>
        @endforeach
    </section>
</x-layouts.layout>
