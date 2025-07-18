<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kabaleyan Cove Resort')</title>
    <link rel="icon" type="image/png" href="{{ asset('KCR.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://kit.fontawesome.com/5ccb4e6d08.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="/src/styles.css" rel="stylesheet">
</head>

<body x-data="{ sidebarOpen: false }" class="flex bg-[#FFFDF6]">

    <div x-show="sidebarOpen" class="fixed top-0 left-0 h-full w-64 z-30 transition-all duration-350 ease-in-out"
        x-transition:enter="transition transform duration-350" x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0" x-transition:leave="transition transform duration-350"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full">

        {{-- Sidebar --}}
        @include('partials.sidebar')
    </div>

    {{-- Page content --}}
    <div class="flex flex-col flex-1 min-h-screen">

        {{-- Header --}}
        <div class="fixed top-0 right-0 z-20 transition-all duration-350 ease-in-out shadow-xl/20"
            :class="sidebarOpen ? 'left-64' : 'left-0'">
            <header class="bg-[#A0C878] pl-5 text-white shadow flex items-center gap-2 w-full">
                <i class="fa-solid fa-bars text-2xl mr-2 text-[#FAF6E9] cursor-pointer text-shadow-lg"
                    @click="sidebarOpen = !sidebarOpen"></i>
                <img src="{{ asset('KCR.png') }}" alt="Logo" class="w-15 h-15 object-contain">
                <h1 class="text-lg font-semibold italic text-[#FAF6E9] text-shadow-lg">Kabaleyan Cove Resort</h1>
            </header>
        </div>

        {{-- Main Content --}}
        <main class="flex-1 p-6 mt-16 transition-all duration-350 ease-in-out bg-[#FFFDF6]">
            @yield('content')
        </main>
    </div>

</body>

</html>
