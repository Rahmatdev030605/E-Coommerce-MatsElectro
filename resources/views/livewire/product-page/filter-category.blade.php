<div class="p-4 mb-5 bg-white border border-gray-200 dark:border-gray-900 dark:bg-gray-900">
    <h2 class="text-2xl font-bold dark:text-gray-400"> Categories</h2>
    {{-- {{ json_encode($selected_categories) }} --}}
    <div class="w-16 pb-2 mb-6 border-b border-rose-600 dark:border-gray-400"></div>
    <ul>
        @foreach ($categories as $category)
        <li class="mb-4">
            <label for="{{ $category->slug }}"  wire:key="{{ $category->id }}" class="flex items-center dark:text-gray-400 ">
                <input type="checkbox" class="w-4 h-4 mr-2" id="{{ $category->slug }}" wire:model.live="selected_categories" value="{{ $category->id }}">
                <span class="text-lg">{{ $category->name }}</span>
            </label>
        </li>
        @endforeach
    </ul>

</div>
