<template>
    <div class="text-right text-xs print:hidden">
        <button onclick="window.print()" type="button" class="inline-flex gap-1 bg-green-500 hover:bg-green-700 text-white items-center rounded px-2 py-1 hover:scale-105 duration-500">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z" clip-rule="evenodd" />
                </svg>
            </span>
            <span>Print</span>
        </button>
    </div>
</template>
