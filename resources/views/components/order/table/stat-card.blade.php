@props(['headline', 'data', 'stonks' => null, 'stonks_data' => null, 'tooltip' => null])
<div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
    <div class="p-4 md:p-5">
        <div class="flex items-center gap-x-2">
            <p class="text-xs tracking-wide text-gray-500 uppercase dark:text-neutral-500">
                {{ $headline }}
            </p>

            @if ($tooltip)
                <div class="hs-tooltip">
                    <div class="hs-tooltip-toggle">
                        <svg class="text-gray-500 shrink-0 size-4 dark:text-neutral-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                            <path d="M12 17h.01" />
                        </svg>
                        <span
                            class="absolute z-10 invisible inline-block px-2 py-1 text-xs font-medium text-white transition-opacity bg-gray-900 rounded shadow-sm opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible dark:bg-neutral-700"
                            role="tooltip">
                            {{ $tooltip }}
                        </span>
                    </div>
                </div>
            @endif
        </div>

        <div class="flex items-center mt-1 gap-x-2">
            <h3 class="text-xl font-medium text-gray-800 sm:text-2xl dark:text-neutral-200">
                {{ $data }}
            </h3>

            @if ($stonks == 'up')
                <span class="flex items-center text-primary gap-x-1">
                    <svg class="self-center inline-block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                        <polyline points="16 7 22 7 22 13" />
                    </svg>
                </span>
            @elseif ($stonks == 'down')
                <span class="flex items-center text-error gap-x-1">
                    <svg class="self-center inline-block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="22 17 13.5 8.5 8.5 13.5 2 7" />
                        <polyline points="16 17 22 17 22 11" />
                    </svg>
                    <span class="inline-block text-sm">
                        {{ $stonks_data }}
                    </span>
                </span>
            @endif
        </div>
    </div>
</div>
