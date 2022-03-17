<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('title')
        </title>

        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
        <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
        <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        
    </head>
    <body class="antialiased">
        <script src="/js/alpine.js"></script>
        <div class="mb-0" id="app">
            <div class="flex h-screen print:h-full bg-gray-50 dark:bg-gray-900" >
                <!-- Sidebar -->
                <aside class="print:hidden z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
                    @include('hrm.layouts.includes.sidebar.index')
                    {{-- <sidebar></sidebar> --}}
                </aside>
                <!-- Mobile menu -->
                {{-- <div v-show="isSidebarOpen" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center print:hidden" style="display: none;"></div>
                <aside v-show="isSidebarOpen" ref="sidebar" @keydown.esc="close_side_menu()" class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden print:hidden"  style="display: none;">
                    <the-sidebar></the-sidebar>
                </aside> --}}
                <!-- Container -->
                <div class="flex flex-col flex-1 w-full">
                    <header class="print:hidden z-10 py-4 bg-gray-50 shadow-md dark:bg-gray-800">
                        @include('hrm.layouts.includes.header')
                        {{-- <the-header></the-header> --}}
                    </header>
                    <!-- Main content -->
                    <main class="h-full overflow-y-auto print:w-full print:bg-white mb-0">
                        <div class="container px-6 mx-auto grid mb-0">
                            <!-- Actutal content here -->
                            @yield('content')
                            {{-- <router-view></router-view> --}}
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </body>

    
    <script defer src="/js/app.js"></script>
    
</html>
