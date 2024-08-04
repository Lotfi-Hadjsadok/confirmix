<div>
    <div class="flex items-center justify-between">
        <label class="block mb-2 text-sm dark:text-white">{{ $label }}</label>
        @if ($recovery)
            <a href="{{ $recovery['url'] }}"
                class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-none focus:underline dark:text-blue-500"
                href="../examples/html/recover-account.html">{{ $recovery['label'] }}</a>
        @endif
    </div>
    <div class="relative">
        <input type="{{ $type }}"
            class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
            {{ $required ? 'required' : '' }} wire:model='value' placeholder="{{ $placeholder }}">

        @if ($error)
            <div class="absolute pointer-events-none top-3 end-0 pe-3">
                <svg class="text-red-500 size-5" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"
                    aria-hidden="true">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                </svg>
            </div>
        @endif

    </div>
    @if ($error)
        <p class="mt-2 text-xs text-red-600" id="password-error">{{ $error }}</p>
    @endif
</div>
