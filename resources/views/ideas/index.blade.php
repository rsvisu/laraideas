<x-layouts.layout>
    <x-slot name="title">{{__('View Ideas')}}</x-slot>
    <x-slot name="description">{{__('View your or modify your ideas')}}</x-slot>

    <section class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-6">
        @forelse($ideas as $idea)
            <!-- Card -->
            <article class="card w-full shadow-md bg-base-100 hover:shadow-lg transition-shadow">
                <!-- Card content -->
                <div class="card-body">
                    <!-- Card title -->
                    <h3 class="card-title break-all line-clamp-1"
                        title="{{ $idea->title }}">
                        {{ $idea->title }}
                    </h3>
                    <!-- Card description -->
                    <p>{{ $idea->description }}</p>
                    <!-- Card actions -->
                    <div class="card-actions justify-end mt-4">
                        <form action="{{ route('ideas.destroy', $idea->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-soft btn-secondary btn-sm">{{__('Delete')}}</button>
                            <a href="{{ route('ideas.edit', $idea->id) }}"
                               class="btn btn-soft btn-primary btn-sm">{{__('Edit')}}</a>
                        </form>
                    </div>
                </div>
            </article>
        @empty
            <div class="col-span-full">
                <div class="alert bg-base-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         class="h-6 w-6 shrink-0 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>{{__('No ideas yet')}}</span>
                </div>
            </div>
        @endforelse
    </section>
    @if(session('deleted'))
        <x-alert-success
            :message="__('Idea \':idea\' deleted successfully', ['idea' => session('title')])"
        />
    @endif
    @if(session('updated'))
        <x-alert-success
            :message="__('Idea \':idea\' updated successfully', ['idea' => session('title')])"
        />
    @endif
</x-layouts.layout>
