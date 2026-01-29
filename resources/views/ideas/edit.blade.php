<x-layouts.layout>
    <x-slot name="title">{{__('Edit Idea')}}</x-slot>
    <x-slot name="description">{{__('Edit \'' . $idea->title . '\' idea')}}</x-slot>

    <div>
        <section class="w-full">
            <article class="card w-full shadow bg-base-100">
                <div class="card-body">
                    <h3 class="card-title">{{__('Edit your idea')}}</h3>
                    <form action="{{ route('ideas.update', $idea->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="my-4">
                            <label for="idea-title">{{__('New idea title')}}
                                <span class="opacity-50">{{__('(empty to leave it the same)')}}</span></label>
                            <input type="text" id="idea-title" name="title" class="input w-full"
                                   placeholder="{{ $idea->title }}">
                        </div>
                        <div class="my-4">
                            <label for="idea-title">{{__('New idea description')}}
                                <span class="opacity-50">{{__('(empty to leave it the same)')}}</span></label>
                            <textarea id="idea-description" name="description" class="textarea w-full"
                                      placeholder="{{ $idea->description }}"></textarea>
                        </div>
                        <div class="mt-6 flex items-center justify-end gap-x-6 border-t border-gray-200 pt-4">
                            <a href="{{ route('ideas.index') }}"
                               class="btn btn-soft btn-secondary">{{ __('Cancel') }}</a>
                            <button type="submit" class="btn btn-soft btn-primary">{{ __('Save') }}</button>
                        </div>
                    </form>
                </div>
            </article>
            <!-- Errors -->
            <x-inputs-errors/>
        </section>
    </div>
</x-layouts.layout>
