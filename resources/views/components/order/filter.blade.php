<div {{ $attributes->merge(['class' => 'hs-dropdown [--placement:bottom-right] relative inline-block']) }}>
    <button type="button"
        class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
        <svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 6h18" />
            <path d="M7 12h10" />
            <path d="M10 18h4" />
        </svg>
        Date
    </button>
    <livewire:order.table.filter-by wire:model.change='filter_by'></livewire:order.table.filter-by>

</div>
