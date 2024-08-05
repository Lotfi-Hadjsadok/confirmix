<header wire:ignore
    class="dark:bg-neutral-800 items-center pr-6 pl-20  w-full h-[8vh]   justify-between dark:border-neutral-700 bg-white border-b hs-dropdown relative inline-flex">
    <div class="dark:text-white">Confirmix</div>
    <div class="relative inline-flex hs-dropdown">
        <button id="hs-dropdown-custom-trigger" type="button"
            class="inline-flex items-center py-1 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-full shadow-sm hs-dropdown-toggle ps-1 pe-3 gap-x-2 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
            <svg class="size-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <circle cx="12" cy="6" r="4" fill="#ffffff"></circle>
                    <ellipse cx="12" cy="17" rx="7" ry="4" fill="#ffffff"></ellipse>
                </g>
            </svg>
            <span
                class="text-gray-600 font-medium truncate max-w-[7.5rem] dark:text-neutral-400">{{ auth()->user()->name }}</span>
            <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="m6 9 6 6 6-6" />
            </svg>
        </button>

        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-1 space-y-0.5 mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700"
            role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-custom-trigger">

            <form action="{{ route('logout') }}" method="POST" class="w-full">
                @csrf
                <button
                    class="flex w-full items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700">
                    Logout
                </button>
            </form>

        </div>
    </div>
</header>
