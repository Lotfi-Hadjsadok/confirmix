<div
    class="bg-white border border-gray-200 shadow-sm rounded-xl max-w-[750px] mx-auto dark:bg-neutral-900 mt-[100px] dark:border-neutral-700">
    <div class="p-4 sm:p-7">
        <div class="text-center">
            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign in</h1>
            <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                Don't have an account yet?
                <a class="font-medium text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline dark:text-blue-500"
                    href="../examples/html/signup.html">
                    Sign up here
                </a>
            </p>
        </div>

        <div class="mt-5">

            <div
                class="flex items-center py-3 text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">
                Or</div>

            <!-- Form -->
            <form wire:submit.prevent='login'>
                <div class="grid gap-y-4">

                    <livewire:form.input label="Email" type="email" wire:model='email' :error="$errors->first('email')" />


                    <livewire:form.input label="Password" type="password" wire:model='password'></livewire:form.input>

                    <button type="submit"
                        class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Sign
                        in</button>
                </div>
            </form>
            <!-- End Form -->
        </div>
    </div>
</div>
