<x-layouts.layout>
    <x-slot name="title">{{__('Idea')}}</x-slot>
    <x-slot name="description">{{__('Create your ideas')}}</x-slot>

    <div>
        <section class="w-full">
            <article class="card w-full shadow bg-base-100">
                <div class="card-body">
                    <h3 class="card-title">{{__('Create idea')}}</h3>
                    <form action="#" method="POST">
                        @csrf
                        <div class="my-4">
                            <label for="idea-title">{{__('Idea title')}}</label>
                            <input type="text" id="idea-title" name="title" class="input w-full" required>
                        </div>
                        <div class="my-4">
                            <label for="idea-title">{{__('Idea description')}}</label>
                            <textarea id="idea-description" name="description" class="textarea w-full"
                                      required></textarea>
                        </div>
                        <div class="mt-6 flex items-center justify-end gap-x-6 border-t border-gray-200 pt-4">
                            <button type="button" class="btn btn-soft btn-secondary">{{ __('Cancel') }}</button>
                            <button type="submit" class="btn btn-soft btn-primary">{{ __('Save') }}</button>
                        </div>
                    </form>
                </div>
            </article>
        </section>
    </div>
</x-layouts.layout>
