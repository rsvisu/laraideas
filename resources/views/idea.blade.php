<x-layouts.layout>
    <x-slot name="title">{{__('Idea')}}</x-slot>
    <x-slot name="description">{{__('Create or modify your ideas')}}</x-slot>

    <div>
        <section class="grid grid-cols-2 gap-4 h-full">
            <article class="bg-white rounded-lg p-6">
                <h3 class="text-lg font-bold">{{__('Create idea')}}</h3>
                <form action="#" method="POST">
                    @csrf
                    <div class="my-4">
                        <label for="idea-title">{{__('Idea title')}}</label>
                        <input type="text" id="idea-title" name="title" class=" focus:outline-1 focus:outline-indigo-400  py-1 bg-white/5 px-1.5 mt-2 block border border-gray-300 rounded-md shadow-sm w-full" required>
                    </div>
                    <div class="my-4">
                        <label for="idea-title">{{__('Idea description')}}</label>
                        <textarea id="idea-description" name="description" class="focus:outline-1 focus:outline-indigo-400 py-1 bg-white/5 px-1.5 mt-2 block border border-gray-300 rounded-md shadow-sm w-full" required></textarea>
                    </div>
                    <div class="mt-6 flex items-center justify-end gap-x-6 border-t border-gray-200 pt-4">
                        <button type="button" class="text-sm/6 font-semibold text-gray-900 cursor-pointer hover:bg-gray-50 px-3 py-2 rounded-sm">{{ __('Cancel') }}</button>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer">{{ __('Save') }}</button>
                    </div>
                </form>
            </article>
            <article class="bg-white rounded-lg p-6">
                <h3 class="text-lg font-bold">{{__('Modify idea')}}</h3>
            </article>
        </section>
    </div>
</x-layouts.layout>
