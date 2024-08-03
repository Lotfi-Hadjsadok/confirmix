<div wire:ignore
    class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden divide-y divide-gray-200 min-w-48 z-20 bg-white shadow-md rounded-lg mt-2 dark:divide-neutral-700 dark:bg-neutral-800 dark:border dark:border-neutral-700"
    role="menu" aria-orientation="vertical" aria-labelledby="hs-as-table-table-filter-dropdown">

    <div wire:key="{{ $parent_id }}-filter" class="divide-y divide-gray-200 dark:divide-neutral-700 *:p-2">
        <label class="flex">
            <input type="radio" wire:model.change='filter_by' value="today"
                class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
            <div class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Today</div>

        </label>

        <label class="flex">
            <input type="radio" wire:model.change='filter_by' name="filter_by" value="maximum"
                class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
            <div class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Maximum</div>
        </label>

        <label class="flex">
            <input type="radio" wire:model.change='filter_by' name="filter_by" value="seven_last_days"
                class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
            <div class="text-sm text-gray-500 ms-2 dark:text-neutral-400">7 last days</div>
        </label>

        <label class="flex">
            <input type="radio" wire:model.change='filter_by' name="filter_by" value="thirty_last_days"
                class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
            <div class="text-sm text-gray-500 ms-2 dark:text-neutral-400">30 last days</div>
        </label>

    </div>
</div>
