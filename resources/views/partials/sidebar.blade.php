<aside class="w-64 bg-[#73946B] text-white min-h-screen">
    <h1 class="text-3xl text-[#FAF6E9] bg-[#73946B] font-bold my-4 text-center">Counter 1</h1>
    <ul>

        <li class="flex items-center gap-2 pl-6 py-1 {{ request()->routeIs('dashboard') ? 'bg-[#537D5D]' : '' }}">
            <i class="fa-solid fa-house"></i>
            <a href="{{ route('dashboard') }}"
                class="block py-2 text-[#FAF6E9] font-semibold">Dashboard</a>
        </li>


         <li class="flex items-center gap-2 pl-6 py-1 {{ request()->routeIs('order') ? 'bg-[#537D5D]' : '' }}">
            <i class="fa-solid fa-cart-shopping"></i>
            <a href="{{ route('order') }}"
                class="block py-2 text-[#FAF6E9] font-semibold">Order</a>
        </li>

         <li class="flex items-center gap-2 pl-6 py-1 {{ request()->routeIs('inventory') ? 'bg-[#537D5D]' : '' }}">
            <i class="fa-solid fa-warehouse"></i>
            <a href="{{ route('inventory') }}" 
                class="block py-2 text-[#FAF6E9] font-semibold">Inventory</a>
        </li>

         <li class="flex items-center gap-2 pl-6 py-1 {{ request()->routeIs('accountList') ? 'bg-[#537D5D]' : '' }}">
            <i class="fa-solid fa-circle-user"></i>
            <a href="{{ route('accountList') }}" 
                class="block py-2 text-[#FAF6E9] font-semibold">Account List</a>
        </li>

        <li class="flex items-center gap-2 pl-6 py-1 {{ request()->routeIs('purchaseHistory') ? 'bg-[#537D5D]' : '' }}">
            <i class="fa-solid fa-shop"></i>
            <a href="{{ route('purchaseHistory') }}" 
                class="block py-2 text-[#FAF6E9] font-semibold">Purchase History</a>
        </li>

         <li class="flex items-center gap-2 pl-6 py-1 {{ request()->routeIs('profile') ? 'bg-[#537D5D]' : '' }}">
            <i class="fa-solid fa-user"></i>
            <a href="{{ route('profile') }}" 
                class="block py-2 text-[#FAF6E9] font-semibold">Profile</a>
        </li>

    </ul>
</aside>
