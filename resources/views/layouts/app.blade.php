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
<body x-data="{ sidebarOpen: true }" class="flex bg-[#FFFDF6]">
    
    <div 
        x-show="sidebarOpen"
        class="transition-all duration-350 ease-in-out"
        x-transition:enter="transition transform duration-350"
        x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition transform duration-350"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
    >

        {{-- Sidebar --}}
        @include('partials.sidebar')
    </div>

     {{-- Page content --}}
<div class="flex flex-col flex-1 min-h-screen">

        {{-- Header --}}
        <div 
    class="absolute top-0 transition-all duration-350 ease-in-out"
    :class="sidebarOpen ? 'left-64' : 'left-0'"
>
    <header class="bg-[#A0C878] text-white p-3 shadow flex items-center gap-2 w-screen">
        <i class="fa-solid fa-bars text-xl mr-2 text-[#FAF6E9] cursor-pointer"
           @click="sidebarOpen = !sidebarOpen"
        ></i>
        <img src="{{ asset('KCR.png') }}" alt="Logo" class="w-6 h-6 object-contain">
        <h1 class="text-md font-semibold italic text-[#FAF6E9]">Kabaleyan Cove Resort</h1>
    </header>
</div>

        {{-- Main Content --}}
        <main class="flex-1 p-6 mt-10 transition-all duration-350 ease-in-out relative"
        :class="sidebarOpen ? 'left-64' : 'left-0'"
        >
            @yield('content')
        </main>
    </div>

</body>
</html>
