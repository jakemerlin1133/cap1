<aside class=" w-64 bg-[#73946B] text-white min-h-screen shadow-xl/30 inset-shadow-sm h-full">
    <h1 class="text-3xl text-[#FAF6E9] bg-[#73946B] font-bold py-4 text-center text-shadow-lg">Counter 1</h1>
    <ul>

        <li
            class="flex items-center gap-2 pl-6 py-1 my-2 text-shadow-lg hover:bg-[#537D5D] hover:shadow-xl/20 {{ request()->routeIs('dashboard') ? 'bg-[#537D5D] shadow-xl/20' : '' }}">

            <a href="{{ route('dashboard') }}" class="block py-2 text-[#FAF6E9] font-semibold text-shadow-lg w-full"><i
                    class="fa-solid fa-house pr-2"></i>Dashboard</a>
        </li>


        <li
            class="flex items-center gap-2 pl-6 py-1 my-2 text-shadow-lg hover:bg-[#537D5D] hover:shadow-xl/20 {{ request()->routeIs('products') ? 'bg-[#537D5D] shadow-xl/20' : '' }}">

            <a href="{{ route('products') }}" class="block py-2 text-[#FAF6E9] font-semibold text-shadow-lg w-full"><i
                    class="fa-solid fa-cart-shopping pr-2"></i> Products</a>
        </li>

        <li
            class="flex items-center gap-2 pl-6 py-1 my-2 text-shadow-lg hover:bg-[#537D5D] hover:shadow-xl/20 {{ request()->routeIs('inventory') ? 'bg-[#537D5D] shadow-xl/20' : '' }}">

            <a href="{{ route('inventory') }}" class="block py-2 text-[#FAF6E9] font-semibold text-shadow-lg w-full"><i
                    class="fa-solid fa-warehouse pr-2"></i> Inventory</a>
        </li>

        <li
            class="flex items-center gap-2 pl-6 py-1 my-2 text-shadow-lg hover:bg-[#537D5D] hover:shadow-xl/20 {{ request()->routeIs('accountList') ? 'bg-[#537D5D] shadow-xl/20' : '' }}">

            <a href="{{ route('accountList') }}"
                class="block py-2 text-[#FAF6E9] font-semibold text-shadow-lg w-full"><i
                    class="fa-solid fa-circle-user pr-2"></i>Account
                List</a>
        </li>

        <li
            class="flex items-center gap-2 pl-6 py-1 my-2 text-shadow-lg hover:bg-[#537D5D] hover:shadow-xl/20 {{ request()->routeIs('purchaseHistory') ? 'bg-[#537D5D] shadow-xl/20' : '' }}">

            <a href="{{ route('purchaseHistory') }}"
                class="block py-2 text-[#FAF6E9] font-semibold text-shadow-lg w-full"><i class="fa-solid fa-shop pr-2"></i>
                Purchase History</a>
        </li>

        <li
            class="flex items-center gap-2 pl-6 py-1 text-shadow-lg hover:bg-[#537D5D] hover:shadow-xl/20 {{ request()->routeIs('profile') ? 'bg-[#537D5D] shadow-xl/20' : '' }}">

            <a href="{{ route('profile') }}" class="block py-2 text-[#FAF6E9] font-semibold text-shadow-lg w-full"><i
                    class="fa-solid fa-user pr-2"></i> Profile</a>
        </li>
    </ul>
</aside>
