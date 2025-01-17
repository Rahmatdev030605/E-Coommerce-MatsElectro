<div class="p-4 mb-5 bg-white border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
    <h2 class="text-2xl font-bold dark:text-gray-400">Brand</h2>
    <div class="w-16 pb-2 mb-6 border-b border-rose-600 dark:border-gray-400"></div>
    <ul>
        @foreach ($brands as $brand)
        <li class="mb-4">
          <label wire:key="{{ $brand->id }}" for="{{ $brand->slug }}" class="flex items-center dark:text-gray-300">
            <input type="checkbox" class="w-4 h-4 mr-2" id="{{ $brand->slug }}" wire:model.live="selected_brands" value="{{ $brand->id }}">
            <span class="text-lg dark:text-gray-400">{{ $brand->name }}</span>
          </label>
        </li>
        @endforeach
    </ul>
</div>
