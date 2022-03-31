<div x-data="{ categories: {{ json_encode($categories) }} }" :class="selectedTab =='all' || categories.includes(selectedTab) ? 'block' : 'hidden' "
    class="w-full px-4 md:w-1/2 xl:w-1/3">
    <div class="relative mb-12">
        <a href="{{ $github }}" target="_blank">
            <div class="overflow-hidden rounded-lg duration-100 ease-in hover:scale-105">
                <img src="{{ $image }}" alt="portfolio" class="h-[260px] w-full object-cover" />
            </div>
        </a>
        <div
            class="relative z-10 mx-7 -mt-4 h-[260px] rounded-lg bg-white py-9 px-3 text-center shadow-lg dark:bg-slate-800">
            <span class="text-primary mb-2 block text-sm font-semibold">
                {{ implode(', ', $categories) }}
            </span>
            <h3 class="text-dark mb-4 text-lg font-bold dark:text-gray-300">
                {{ $title }}
            </h3>
            <x-button-link :href="$github" variant="outline-primary">View Details</x-button-link>
        </div>
    </div>
</div>
